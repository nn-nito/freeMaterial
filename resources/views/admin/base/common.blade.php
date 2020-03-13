<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>

{{-- ヘッダー --}}
<div class="cp_sidebar">
    <header>Menu</header>
    <nav class="cp_sidebar_nav">
        <ul>
            <li><a href="#"><i class="fa fa-home fa-fw"></i><span>画像</span></a>
                <ul class="cp_sidebar_2ndnav">
                    <li><a href="{{action('Admin\AdminUploadPhotoController@index')}}"><i class="fa fa-calendar fa-fw"></i>S3アップロード</a></li>
                    <li><a href="#"><i class="fa fa-calendar-minus-o fa-fw"></i>Menu1 2nd Menu2</a></li>
                    <li><a href="#"><i class="fa fa-calendar-times-o fa-fw"></i>Menu1 2nd Menu3</a></li>
                    <li><a href="#"><i class="fa fa-calendar-plus-o fa-fw"></i>Menu1 2nd Menu4</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-file-text fa-fw"></i><span class="">Menu2</span></a>
                <ul class="cp_sidebar_2ndnav">
                    <li><a href="#"><i class="fa fa-file-image-o fa-fw"></i>Menu2 2nd Menu1</a></li>
                    <li><a href="#"><i class="fa fa-file-video-o fa-fw"></i>Menu2 2nd Menu2</a></li>
                    <li><a href="#"><i class="fa fa-file-audio-o fa-fw"></i>Menu2 2nd Menu3</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-comment fa-fw"></i><span class="">Menu3</span></a>
                <ul class="cp_sidebar_2ndnav">
                    <li><a href="#"><i class="fa fa-commenting fa-fw"></i>Menu3 2nd Menu1</a></li>
                    <li><a href="#"><i class="fa fa-comments fa-fw"></i>Menu3 2nd Menu2</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-share-alt fa-fw"></i><span class="">Menu4</span></a>
                <ul class="cp_sidebar_2ndnav">
                    <li><a href="#"><i class="fa fa-facebook fa-fw"></i>Menu4 2nd Menu1</a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-fw"></i>Menu4 2nd Menu2</a></li>
                    <li><a href="#"><i class="fa fa-google-plus fa-fw"></i>Menu4 2nd Menu3</a></li>
                </ul>
            </li>
            <li class="control"><a href="#"><i class="fa fa-cog fa-fw"></i><span class="">Menu5</span></a></li>
        </ul>
    </nav>
</div>

<main role="main">
    {{-- ホーム --}}
    @yield('home')
    {{-- 写真アップロード --}}
    @yield('upload_photo')

</main>

<!-- フッター -->
<footer class="text-muted">
    <div class="container">
        <div class="row">
            <div class="c">
                <p>写真館 &copy; blue</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
