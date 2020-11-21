@extends('base.common')

{{-- タイトル --}}
@section('title')
    写真詳細
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

@section('detail')
    <div class="image-detail">
        <div class="container">
            <div class="box26">
                <div class="box-title">詳細</div>
                <div class="row detail-box">
                    <p>
                    <div class="col-sm-7 detail-image">
                        <img src="{{ $photo_detail['url'] }}">
                    </div>
                    <div class="col-sm-5 detail-text detail-list">
                        <ul>
                            <li>投稿ユーザー：{{ $photo_detail['user_name'] }}</li>
                            <li>投稿日時：{{ $photo_detail['post_date'] }}</li>
                            <li>解像度：{{ $photo_detail['resolution'] }}</li>
                            <li>ダウンロード数：{{ $photo_detail['download_count'] }}</li>
                        </ul>

                        <div class="d-flex flex-column">
                            <div class="description">
                                <div class="main-title">
                                    <span>説明</span>
                                </div>
                                <div class="box11">
                                    <span>
                                        {!! nl2br($photo_detail['description'], false) !!}
                                    </span>
                                </div>
                            </div>
                            <p style="font-size: 3em;">
                                <a href="{{ action('DownloadPhotoController@index', $id) }}" alt="" style="color: black;">
                                    <i class="fas fa-download"></i>
                                </a>
                            </p>
                        </div>
                        {{--                        <p style="font-size: 3em;">--}}
                        {{--                            <a href="{{ action('Photo') }}" alt="" style="color: black;">--}}
                        {{--                                <i class="fas fa-download"></i>--}}
                        {{--                            </a>--}}
                        {{--                            <a href="{{ action('Photo') }}" alt="" style="color: black;">--}}
                        {{--                                <i class="fas fa-download"></i>--}}
                        {{--                            </a>--}}
                        {{--                        </p>--}}
                    </div>
                    </p>
                </div><!-- row -->
            </div><!-- box29 -->
        </div><!-- container -->
    </div>
@endsection
