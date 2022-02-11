{{-- 選んだ記事を見るページ --}}

@extends('layout.mainLayout')

{{-- 各ファイル読み込み --}}
@section('LoadJS')
<script src="{{ asset('js/pages/article.js') }}"></script>
<script src="{{asset('js/components/searchbar.js')}}"> </script>
<script src="{{ asset('js/lib/marked.js') }}"></script>
<script src="{{ asset('js/lib/highlight.pack.js') }}"></script>
<script src="{{ asset('js/lib/ArticleControl.js') }}"></script>
@endsection

@section('LoadCSS')
<link rel="stylesheet" href="{{asset('css/pages/articles.css')}}">
<link rel="stylesheet" href="{{asset('css/pages/article.css')}}">
<link rel="stylesheet" href="{{asset('css/components/searchbar.css')}}">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/atom-one-dark.min.css">
@endsection

{{-- ここまでファイル読み込み --}}

{{-- ここから本文 --}}
@section('mainContent')
<div class="wrapper">
    <div class="main">
        <div class="article-block-wrap">
            <div id="title-block">
                <h1>{{ $article->title }}</h1>
            </div>
            <div id="sub-title-block">
                <h2> {{ $article->sub_title }}</h2>
            </div>
            <div id="content-block">
                {{ $article->content }}
            </div>

        </div>
        <div class="search-block-wrap">
            <x-searchbar :mtags=$m_tags />
        </div>
    </div>
</div>
@endsection
{{-- 本文ここまで --}}