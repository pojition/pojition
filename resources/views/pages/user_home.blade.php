@extends('layout.mainLayout')

{{-- 各ファイル読み込み --}}
@section('LoadJS')
<script src="{{asset('js/pages/user_home.js')}}"></script>
@endsection
@section('LoadCSS')
<link rel="stylesheet" href="{{asset('css/pages/user_home.css')}}">
@endsection
{{-- ここまでファイル読み込み --}}

{{-- ここから本文 --}}
@section('mainContent')

<div class="wrapper">
    <div class="main">
        <div class="top-block-wrap" ontouchstart="">
            <a href="#" class="top-image hover-point">
                <img src="{{asset('images/pages/user_home/top-image.jpg')}}">
                <div class="content">
                    <div class="">PROFILE</div>
                </div>
            </a>
            <div class="profile-wrap">
                <div class="myname">
                    MAO KOYAMA
                </div>
                <div class="birth">
                    1998.03.18 生まれ
                </div>
                <div class="career">
                    2016.04 ●●に入学<br>
                    2020.03 ●●大学を4年で卒業<br>
                    2020.04 株式会社●●に入社
                    2021.11 現在も就業中。
                </div>
            </div>

        </div>
        <div class="top-block-wrap" ontouchstart="">
            <a href="#" class="top-image hover-point">
                <img id="contact-btn" src="{{asset('images/pages/user_home/top-image2.jpg')}}">
                <div class="content">
                    <div class="">CONTACT</div>
                </div>
            </a>
            <div class="mail-wrap">
                <div class="mail">
                    ツイッターやインスタグラムも稼働中です！
                    ぜひフォローお願いします！
                </div>
            </div>
        </div>

        <a href="{{url('article/list')}}" class="article-top-image hover-point mg-bottom" ontouchstart="">
            <img src="{{asset('images/pages/user_home/article-image.jpg')}}">
            <div class="content">
                <div class="">ARTICLE</div>
            </div>
        </a>
        {{-- ここから記事一覧 --}}
        <x-articlecontent title='Recent Articles' :articles=$articles />
        {{-- ここまで記事 --}}


    </div>
</div>
@endsection
{{-- ここまで本文 --}}