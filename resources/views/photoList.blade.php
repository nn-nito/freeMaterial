@extends('base.common')

{{-- タイトル --}}
@section('title')
    写真一覧
@endsection

{{-- ジャンボワード --}}
@section('jumbotron')
    <section class="jumbotron">
        <div class="container">
            <h1 class="jumbotron-heading text-center">フリー素材画像</h1>
            <div class="title-row d-flex-column justify-content-end  text-center">
                <p>
                    <a href="{{ action('PhotoListController@index', ['tag_all']) }}" class="btn-top-radius mx-1">画像一覧</a>
                    <a href="{{ action('TagListController@index') }}" class="btn-top-radius mx-1">タグ一覧</a>
                    <a href="{{ action('InfoListController@index') }}" class="btn-top-radius mx-1">お知らせ一覧</a>
                    <a href="{{ action('AboutWebsiteController@index') }}" class="btn-top-radius mx-1">サイトについて</a>
                </p>
            </div>
            <form method="POST" class="form-inline" style="margin: 30px;" action="{{action('PhotoListController@search')}}">
                {{ csrf_field() }}
                <div class="input-group" style="margin: 0 auto; background-color: #6c757d">
                    <input type="text" class="form-control" name="tag">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-dark">検索</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

{{-- 写真 --}}
@section('photo')
    <div class="free-images py-5">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="tagtag">
                    <a style="font-size: 300%">{{ ('tag_all' === $tag) ? 'すべて' : $tag}}</a>
                </div>
            </div>
        </div>

        <div class="container py-2">
            <div class="sort-contents">
                <div class="d-flex justify-content-center">
                    <form method="GET" action="{{action('PhotoListController@index', [$tag])}}" class="btn-vertical-border2">
                        <input id="sort-new" class="soa" type="submit" name="sort" {{ (is_null($period)) ? 'disabled' : '' }}>
                        <label class="label-sort" for="sort-new" style="font-size: 170%;  {{ (is_null($period)) ? 'color:#e74c3c;' : '' }}">新着</label>
                    </form>
                    <form method="GET" action="{{action('PhotoListController@index', [$tag, 'total'])}}" class="btn-vertical-border2">
                        <input id="sort-total" class="soa" type="submit" name="sort" {{ ('total' === $period) ? 'disabled' : '' }}>
                        <label class="label-sort" for="sort-total" style="font-size: 170%;  {{ ('total' === $period) ? 'color:#e74c3c;' : '' }}">総合人気</label>
                    </form>
                    <form method="GET" action="{{action('PhotoListController@index', [$tag, 'monthly'])}}" class="btn-vertical-border2">
                        <input id="sort-monthly" class="soa" type="submit" name="sort" {{ ('monthly' === $period) ? 'disabled' : '' }}>
                        <label class="label-sort" for="sort-monthly" style="font-size: 170%;  {{ ('monthly' === $period) ? 'color:#e74c3c;' : '' }}">月間人気</label>
                    </form>
                    <form method="GET" action="{{action('PhotoListController@index', [$tag, 'weekly'])}}" class="btn-vertical-border2">
                        <input id="sort-weekly" class="soa" type="submit" name="sort" {{ ('weekly' === $period) ? 'disabled' : '' }}>
                        <label class="label-sort" for="sort-weekly" style="font-size: 170%; {{ ('weekly' === $period) ? 'color:#e74c3c;' : '' }}">週間人気</label>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="flex-box">
                @foreach($photo_list as $photo)
                    <div class="grid hover1">
                        <a href="{{ action('PhotoDetailController@index', $photo->id) }}" alt="">
                            <img src="{{ $photo->url }}">
                            <div class="mask">
                                <div class="caption">
                                    <p>投稿日時：{{ $photo->created_at->format('Y/m/d h:i') }}</p>
                                    <p>画像クリックで詳細</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- DEBUG用 --}}
                    {{--                    {{$photo->download_count}}--}}
                    {{--                    {{$photo->download_count_monthly}}--}}
                    {{--                    {{$photo->download_count_weekly}}--}}
                    {{--                    {{$photo->name}}--}}
                @endforeach
            </div><!-- flexbox -->
            <!-- ページネーション -->
            <div class="d-flex justify-content-center py-3">
                {{ $photo_list->links() }}
            </div>
        </div><!-- container-fluid-->
    </div>
@endsection
