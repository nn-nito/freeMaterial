@extends('base.common')

{{-- タイトル --}}
@section('title')
    タグ一覧
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

@section('tags')
    <div class="image-detail">
        <h1 class="container">
            <h1 class="display-4" style="text-align: center">タグ一覧</h1>
            <div class="d-flex justify-content-center py-4">
                @foreach($tags as $key => $tag)
                    <div class="box11" style="margin: 0 0 10px 10px">
                        <p style="text-align: center; font-size: 140%"><strong>{{ $key }}</strong></p>
                        @foreach($tag as $item)
                            <div class="tagtag">
                                <a href="{{ action('PhotoListController@index', [$item->name, 'total']) }}" style="text-align: center; font-size: 110%">
                                    {{ $item->name }} ({{$item->related_photo_count}})
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div><!-- container -->
    </div><!-- image-detail -->
@endsection
