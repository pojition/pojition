<html>

<head>
    <title>Mao</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Vue.js使用時に必要 --}}
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">


    {{-- ここからアプリ共通 --}}
    {{-- ライブラリ --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- CSS-Pages --}}
    <link rel="stylesheet" href="{{asset('css/pages/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/header.css')}}">

    {{-- Font Awesome --}}
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    {{-- CSS-Components --}}
    <link rel="stylesheet" href="{{asset('css/components/loading.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/navigationbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/pagination.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/articlecontent.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/t_tag.css')}}">

    {{--JS Component --}}
    <script src="{{asset('js/components/loading.js')}}"></script>
    <script src="{{asset('js/components/hover_point.js')}}"></script>

    {{-- Font --}}
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Abel" />
    {{-- ここまでアプリ共通 --}}

    {{-- JS読み込み --}}
    @yield('LoadJS')

    {{-- CSS読み込み --}}
    @yield('LoadCSS')
</head>

<body>
    {{-- ページ共通の背景画像 --}}
    {{-- <img class="big-bg" src="{{asset('images/common/big-bg1.jpg')}}"> --}}

    {{-- Loading画面読み込み --}}
    @component('components.loading')
    @endcomponent
    {{-- Loading画面ここまで --}}

    {{-- ここからheader --}}
    @component('components.header')
    @endcomponent
    {{-- ここまでheader --}}

    <!-- ここからnavigation bar -->
    @component('components.navigationbar')
    @endcomponent
    <!-- ここまでnavigation bar -->

    @yield('mainContent')

</body>

</html>