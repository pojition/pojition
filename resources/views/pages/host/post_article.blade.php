@extends('layout.hostMainLayout')

@section('LoadCSS')
<link rel="stylesheet" href="{{asset('css/pages/host/post_article.css')}}">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/atom-one-dark.min.css">
@endsection

@section('LoadJS')
<script src="{{ asset('js/pages/host/post_article.js') }}"></script>
<script src="{{ asset('js/lib/marked.js') }}"></script>
<script src="{{ asset('js/lib/highlight.pack.js') }}"></script>
<script src="{{ asset('js/lib/ArticleControl.js') }}"></script>
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


            {{-- 記事の更新の場合はPUTメソッドを使用する --}}
            @if(isset($article))
            <form name="post-form" class="" action="{{url('/knowledge/postArticle').'/'.$article->article_id}}"
                method="POST">
                @csrf
                @method('PUT')
                @else
                <form name="post-form" action="{{url('knowledge/postArticle')}}" method="POST">
                    @csrf
                    @endif

                    <h1 class="font-decorated">Title</h1>
                    <div class="input-field">
                        <input value="{{isset($article) ? $article->title : ''}}" type="text" name="title" id="title">
                    </div>
                    {{-- サブタイトル --}}
                    <h1 class="font-decorated">Sub Title</h1>
                    <div class="input-field">
                        <input value="{{isset($article) ? $article->sub_title : ''}}" type="text" name="sub_title"
                            id="sub-title">
                    </div>
                    {{-- コンテンツ --}}
                    <h1 class="font-decorated">Content</h1>
                    <div class=" input-field">
                        <textarea name="content" id="editor">{{isset($article) ? $article->content : ''}}</textarea>
                    </div>
                    {{--タグ --}}
                    <h1 class="font-decorated">Tag</h1>
                    <div class=" input-field">
                        <input type="text" class="input-field">
                    </div>

                    {{-- 投稿ボタン --}}
                    @if(isset($article))
                    <div class=" input-field">
                        <button type="submit">更新</button>
                    </div>
                    @else
                    <div class=" input-field">
                        <button type="submit">投稿</button>
                    </div>
                    @endif
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