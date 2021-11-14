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
    <article>
        <a href="#" class="top-image article-top-image">
            <img src="{{asset('images/pages/user_home/article-image.jpg')}}">
            <img class="cover">
            <div class="content">
                <div class="">ARTICLE</div>
            </div>
        </a>
    </article>
</div>
@endsection
{{-- ここまで本文 --}}