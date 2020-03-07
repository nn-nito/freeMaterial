@extends('base.common')

{{-- タイトル --}}
@section('title')
    写真館
@endsection

{{-- ジャンボワード --}}
@section('jumbotron')
    <section class="jumbotron">
        <div class="container">
            <h1 class="jumbotron-heading text-center">フリー素材画像</h1>
            <dev class="title-row d-flex-column justify-content-end  text-center">
                <p class="lead text-muted">自然・風景・夜景などを主が適当に撮った写真をまとめたサイトになります。なので公序良俗に反した使い方でなければいろいろな場面でお使いいただいても構いません。</p>
                <p>
                    <a href="#" class="btn-top-radius mx-1">画像一覧</a>
                    <a href="#" class="btn-top-radius mx-1">タグ一覧</a>
                    <a href="#" class="btn-top-radius mx-1">お知らせ一覧</a>
                    <a href="#" class="btn-top-radius mx-1">サイトについて</a>
                </p>
            </dev>
            <form class="form-inline" style="margin: 30px;">
                <div class="input-group" style="margin: 0 auto; background-color: #6c757d">
                    <input type="text" class="form-controlg">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-dark">検索</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

{{-- カルーセル --}}
@section('carousel')
    <div class="carousel py-4 bg-light">
        <div class="container">
            <div id="carousel-1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="storage/test2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="storage/test2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="storage/test2.jpg" alt="Third slide">
                    </div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- お知らせ --}}
@section('info')
    <div class="info py-3 bg-light">
        <div class="container">
            <div class="card card-1 bg-dark">
                <div class="card-header">
                    <h3 style="text-align: center; font-weight: bold; color: #EEEEEE;">お知らせ</h3>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($infos as $info)
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                                <circle cx="12" cy="13" r="4"></circle>
                            </svg>
                            <a href="#">
                                @isset($info->target_date)
                                    {{ $info->target_date }}
                                    &nbsp;&nbsp;
                                @endisset
                                <strong>{{ $info->title }}</strong>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ action('InfoListController@index') }}" class="btn-border-bottom">
                    <span>もっと見る</span>
                </a>
            </div>
        </div>
    </div>
@endsection

{{-- タグ --}}
@section('tag')
    <div class="famous-tags py-3 bg-light">
        <div class="container">
            <div class="main-title">
                <h3><span>人気のタグ</span></h3>
            </div>
            <div class="tag">
                <a href="#" class="badge badge-primary"><h5>風景</h5></a>
                <a href="#" class="badge badge-secondary"><h5>自然</h5></a>
                <a href="#" class="badge badge-success"><h5>Success</h5></a>
                <a href="#" class="badge badge-danger"><h5>Success</h5></a>
                <a href="#" class="badge badge-warning"><h5>Success</h5></a>
                <a href="#" class="badge badge-info"><h5>Success</h5></a>
                <a href="#" class="badge badge-light"><h5>Success</h5></a>
                <a href="#" class="badge badge-dark"><h5>Dark</h5></a>
                <a href="#" class="badge badge-dark"><h5>Dark</h5></a>
                <a href="#" class="badge badge-dark"><h5>Dark</h5></a>
                <a href="#" class="badge badge-dark"><h5>Dark</h5></a>
                <a href="#" class="badge badge-dark"><h5>Dark</h5></a>
                <a href="#" class="badge badge-dark"><h5>Dark</h5></a>
                <a href="#" class="badge badge-dark"><h5>Dark</h5></a>
                <a href="#" class="badge badge-dark"><h5>Dark</h5></a>
                <a href="#" class="badge badge-dark"><h5>Dark</h5></a>
            </div>
        </div>
    </div>
@endsection

{{-- 写真 --}}
@section('photo')
    <div class="free-images py-5 bg-light">
        <div class="container">
            <div class="main-title">
                <h3><span>新着画像</span></h3>
            </div>
        </div>

        <div class="container-fluid">
            <div class="flex-box">
                @foreach($photos as $photo)
                    <div class="grid hover1">
                        <a href="{{ action('PhotoDetailController@index', $photo->id) }}" alt="">
                            <img src="{{ $photo->url }}" alt="">
                            <div class="mask">
                                <div class="caption">
                                    <p>投稿日時：{{ $photo->created_at }}</p>
                                    <p>画像クリックで詳細</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div><!-- flexbox -->
            <div class="d-flex justify-content-center">
                {{ $photos->links() }}
            </div>
        </div><!-- container-fluid-->
    </div>
@endsection
