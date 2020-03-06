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
                        <img src="{{ $photo_detail['filename'] }}">
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
                                        {{ $photo_detail['description'] }}
                                    </span>
                                </div>
                            </div>
                            <p style="font-size: 3em;">
                                <a href="{{ $photo_detail['filename'] }}" download="success.jpg" alt="" style="color: black;">
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
