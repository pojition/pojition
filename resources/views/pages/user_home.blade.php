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

    <a href="#" class="top-image border-all">
        <img src="{{asset('images/pages/user_home/top-image.jpg')}}">
        <img class="cover">
        <div class="content">
            <div class="">PROFILE</div>
        </div>
    </a>

    <a href="#" class="top-image border-all">
        <img src="{{asset('images/pages/user_home/top-image2.jpg')}}">
        <img class="cover">
        <div class="content">
            <div class="">CONTACT</div>
        </div>
    </a>

    <a href="#" class="top-image article-top-image border-all mg-bottom">
        <img src="{{asset('images/pages/user_home/article-image.jpg')}}">
        <img class="cover">
        <div class="content">
            <div class="">ARTICLE</div>
        </div>
    </a>

    {{-- ここから記事一覧 --}}
    {{-- https://qiita.com/silver40/items/91340763b21da916577e --}}
    <x-articlecontent title='最新の記事' :articles=$articles />
    {{-- ここまで記事 --}}


</div>
@endsection
{{-- ここまで本文 --}}