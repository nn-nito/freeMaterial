@extends('base.common')

{{-- タイトル --}}
@section('title')
    お知らせ詳細
@endsection

{{-- ジャンボワード --}}
@section('jumbotron')
    <section class="jumbotron">
        <div class="container">
            <h1 class="jumbotron-heading text-center">じゆう画像素材館</h1>
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
                    <input type="text" required class="form-control" name="tag" placeholder="タグを入力 例）夜景">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-dark">検索</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

{{-- お知らせ --}}
@section('info')
    <div class="info-detail py-3 bg-light">
        <div class="container">
            <div class="card card-2">
                <div class="card-header bg-dark">
                    <h3 style="text-align: center; font-weight: bold; color: #67c5ff;">
                        @isset($info->target_date)
                            {{ $info->target_date }}
                        @endisset
                        {{ $info->title }}
                    </h3>
                </div>
                <div class="card-body" style="font-size: 130%;">
                    <span>{!! nl2br($info->body, false) !!}</span>
                    @if (false === isset($info->body))
                        <span style="display: inline-block; width: 100%; text-align: center; font-size: 180%;">
                            詳細無し
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

