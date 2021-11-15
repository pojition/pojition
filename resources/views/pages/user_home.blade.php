@extends('layout.mainLayout')

{{-- 各ファイル読み込み --}}
@section('LoadJS')

@endsection
@section('LoadCSS')
<link rel="stylesheet" href="{{asset('css/pages/user_home.css')}}">
@endsection
{{-- ここまでファイル読み込み --}}

{{-- ここから本文 --}}
@section('mainContent')
<div class="main">

    <a href="#" class="top-image">
        <img src="{{asset('images/pages/user_home/top-image.jpg')}}">
        <img class="cover">
        <div class="content">
            <div class="">PROFILE</div>
        </div>
    </a>

    <a href="#" class="top-image">
        <img src="{{asset('images/pages/user_home/top-image2.jpg')}}">
        <img class="cover">
        <div class="content">
            <div class="">CONTACT</div>
        </div>
    </a>

    <a href="#" class="top-image article-top-image mg-bottom">
        <img src="{{asset('images/pages/user_home/article-image.jpg')}}">
        <img class="cover">
        <div class="content">
            <div class="">ARTICLE</div>
        </div>
    </a>

    {{-- ここから記事一覧 --}}
    {{-- @Componentで記述したかったが、それだとbladeのデータを送ることができない?
    php artisan make:component実行後、 下記1行で対応--}}
    {{-- https://qiita.com/silver40/items/91340763b21da916577e --}}
    <x-articlecontent :articles=$articles titleslot='最新の記事' />
    {{-- ここまで記事 --}}


</div>
@endsection
{{-- ここまで本文 --}}