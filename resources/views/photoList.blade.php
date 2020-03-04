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

                <div class="grid hover1">
                    <a href="https://web-camp.io/magazine/archives/10657" alt="">
                        <img src="storage/phone.jpg">
                        <div class="mask">
                            <div class="caption">
                                <p>投稿日時：2019/03/02 10:00:00</p>
                                <p>画像クリックで詳細</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid hover1">
                    <a href="https://web-camp.io/magazine/archives/10657" alt="">
                        <img src="storage/test2.jpg">
                        <div class="mask">
                            <div class="caption">
                                <p>投稿日時：2019/03/02 10:00:00</p>
                                <p>画像クリックで詳細</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid hover1">
                    <a href="https://web-camp.io/magazine/archives/10657" alt="">
                        <img src="storage/test.png">
                        <div class="mask">
                            <div class="caption">
                                <p>投稿日時：2019/03/02 10:00:00</p>
                                <p>画像クリックで詳細</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid hover1">
                    <a href="https://web-camp.io/magazine/archives/10657" alt="">
                        <img src="storage/phone.jpg">
                        <div class="mask">
                            <div class="caption">
                                <p>投稿日時：2019/03/02 10:00:00</p>
                                <p>画像クリックで詳細</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid hover1">
                    <a href="https://web-camp.io/magazine/archives/10657" alt="">
                        <img src="storage/test2.jpg">
                        <div class="mask">
                            <div class="caption">
                                <p>投稿日時：2019/03/02 10:00:00</p>
                                <p>画像クリックで詳細</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="grid hover1">
                    <a href="https://web-camp.io/magazine/archives/10657" alt="">
                        <img src="storage/phone.jpg">
                        <div class="mask">
                            <div class="caption">
                                <p>投稿日時：2019/03/02 10:00:00</p>
                                <p>画像クリックで詳細</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div><!-- flexbox -->
            <!-- ページネーション -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item active">
                <span class="page-link">
                  1<span class="sr-only">(current)</span>
                </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav><!-- Page -->
        </div><!-- container-fluid-->
    </div>
@endsection
