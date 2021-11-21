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

{{-- Loading画面読み込み --}}
@component('components.loading')
@endcomponent

<div class="wrapper">
    <div class="main">
        <div class="top-block-wrap" ontouchstart="">
            <a href="#" class="top-image hover-point">
                <img src="{{asset('images/pages/user_home/top-image.jpg')}}">
                <div class="content">
                    <div class="">PROFILE</div>
                </div>
            </a>
            <div>
                ここにプロフィール概要を書きたいと思います
            </div>
        </div>
        <div class="top-block-wrap" ontouchstart="">
            <a href="#" class="top-image hover-point">
                <img src="{{asset('images/pages/user_home/top-image2.jpg')}}">
                <div class="content">
                    <div class="">CONTACT</div>
                </div>
            </a>
            <div>
                こっちはコンタクト
            </div>
        </div>

        <a href="#" class="article-top-image hover-point mg-bottom" ontouchstart="">
            <img src="{{asset('images/pages/user_home/article-image.jpg')}}">
            <div class="content">
                <div class="">ARTICLE</div>
            </div>
        </a>
        {{-- ここから記事一覧 --}}
        <x-articlecontent title='最新の記事' :articles=$articles />
        {{-- ここまで記事 --}}


    </div>
</div>
@endsection
{{-- ここまで本文 --}}