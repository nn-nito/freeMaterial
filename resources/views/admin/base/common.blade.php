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
            <li><a href="#"><i class="far fa-image"></i><span>画像</span></a>
                <ul class="cp_sidebar_2ndnav">
                    <li><a href="{{action('Admin\AdminUploadPhotoController@index')}}"><i class="far fa-caret-square-up"></i>S3アップロード</a></li>
                </ul>
            </li>
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
