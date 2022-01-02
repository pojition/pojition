@extends('layout.mainLayout')

{{-- 各ファイル読み込み --}}
@section('LoadJS')
<script src="{{asset('js/pages/chat.js')}}"></script>
@endsection
@section('LoadCSS')
<link rel="stylesheet" href="{{asset('css/pages/chat.css')}}">
@endsection
{{-- ここまでファイル読み込み --}}

{{-- ここから本文 --}}
@section('mainContent')
<div class="wrapper">
    <div class="main">
        ようこそ、{{Auth::User()->name}}さん！
        <div class="all-chats">
            @foreach ($chats as $chat)
            {{-- チャットが自分が送信したものか判定 --}}
            @if (Auth::id() == $chat['chat_user_id'])
            <div class="left">
                {{$chat['content']}}
            </div>
            @else
            <div class="right">
                {{$chat['name']}} <br><br>
                {{$chat['content']}}
            </div>
            @endif
            <br>
            @endforeach
        </div>


        <div class="input-field">
            <form name="input-form" class="input-form" action="/chatInsert" method="post">
                <textarea id="input-textarea" name="content" value=""></textarea>
                <input id="sub-btn" type="button" value="送信">
                {{-- <label class="sub-btn-wrapper">
                    <input id="sub-btn" type="button" value="">
                    <i class="fab fa-500px"></i>
                </label> --}}
                <input type="hidden" name="user_id">

            </form>
        </div>
    </div>
    @endsection
    {{-- 本文ここまで --}}