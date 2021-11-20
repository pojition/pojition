<html>

<head>
    <title>Mao</title>
    <meta data-n-head="ssr" charset="utf-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width,initial-scale=1">

    {{-- ここからアプリ共通 --}}
    {{-- ライブラリ --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- CSS-Pages --}}
    <link rel="stylesheet" href="{{asset('css/pages/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/header.css')}}">

    {{-- CSS-Components --}}
    <link rel="stylesheet" href="{{asset('css/components/pagination.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/navigationbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/articlecontent.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/t_tag.css')}}">

    {{-- Font --}}
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Abel" />
    {{-- ここまでアプリ共通 --}}

    {{-- JS読み込み --}}
    @yield('LoadJS')

    {{-- CSS読み込み --}}
    @yield('LoadCSS')
</head>

<body>
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