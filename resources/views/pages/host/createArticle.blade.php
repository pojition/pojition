@extends('layout.hostMainLayout')

@section('LoadCSS')
<link rel="stylesheet" href="{{asset('css/pages/host/createArticle.css')}}">
@endsection

@section('mainContent')
記事作成画面
<div class="main">

    <!--表示切替ボタン-->
    <input type="radio" name="diaplay-type" id="both">
    <input type="radio" name="diaplay-type" id="edit" checked>
    <input type="radio" name="diaplay-type" id="preview">


    <!--表示切替タブ-->
    <div class="tab-area">
        <label class="tab-both" for="both" title="両方表示">
            <i class="fa fa-columns"></i>
        </label>
        <label class="tab-edit" for="edit" title="編集画面">Edit</label>
        <label class="tab-preview" for="preview" title="プレビュー">Preview</label>
    </div>


    <div class="block-wrap">
        <!--投稿ブロック-->
        <div class="block compose">
            <form name="post-form" action="{{url('article/')}}" method="POST">
                {{-- タイトル --}}
                <h1 class="font-decorated">Title</h1>
                <div class="input-field">
                    <input type="text" name="title" id="title">
                </div>
                {{-- サブタイトル --}}
                <h1 class="font-decorated">Sub Title</h1>
                <div class="input-field">
                    <input type="text" name="sub_title" id="sub-title">
                </div>
                {{-- コンテンツ --}}
                <h1 class="font-decorated">Content</h1>
                <div class=" input-field">
                    <textarea name="content" id="editor"></textarea>
                </div>
                {{--タグ --}}
                <h1 class="font-decorated">Tag</h1>
                <div class=" input-field">
                    <input type="text" class="input-field">
                </div>
            </form>
        </div>
        <!--プレビューブロック-->
        <div class="block preview">
            Preview画面

            {{-- タイトル--}}
            <div id="title-preview" class="title article"></div>
            {{-- サブタイトル --}}
            <div id="sub-title-preview" class="sub-title article"></div>
            {{-- 記事本文--}}
            <div id="result" class="article main"></div>
            {{-- タグ --}}
            <div class="tag-area"></div>
        </div>
    </div>
</div>
@endsection