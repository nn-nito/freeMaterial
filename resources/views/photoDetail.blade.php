@extends('base.common')

{{-- タイトル --}}
@section('title')
    詳細
@endsection

@section('detail')
    <div class="image-detail">
        <div class="container">
            <div class="box26">
                <div class="box-title">詳細</div>
                <div class="row detail-box">
                    <p>
                    <div class="col-sm-7 detail-image">
                        <img src="storage/test2.jpg">
                    </div>
                    <div class="col-sm-5 detail-text detail-list">
                        <ul>
                            <li>投稿ユーザー：admin</li>
                            <li>投稿日時：2019/10/10</li>
                            <li>大きさ：1080×800</li>
                        </ul>
                        <p style="font-size: 3em;">
                            <a href="https://web-camp.io/magazine/archives/10657" alt="" style="color: black;">
                                <i class="fas fa-download"></i>
                            </a>
                        </p>
                    </div>
                    </p>
                </div><!-- row -->
            </div><!-- box29 -->
        </div><!-- container -->
    </div>
@endsection
