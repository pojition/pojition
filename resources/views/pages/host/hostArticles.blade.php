@extends('layout.hostMainLayout')


{{-- css読み込み --}}
@section('LoadCSS')
<link rel="stylesheet" href="{{asset('css/pages/host/hostArticles.css')}}">
@endsection

{{-- ここから本文 --}}
@section('mainContent')
<div class="main">
    <div>
        <a class="btn btn--orange" href="{{url('/hostArticle/create')}}">New</a>
    </div>
    <article>
        <div id="article-title"></div>
        <div class="article-content">

            @foreach ($articles as $article)
            <a href="{{url('/hostArticles').'/?id='.$article['article_id']}}"
                class="article-block mg-top mg-bottom border-all">
                <img class="article-fil" src="{{asset('images/t_articles'.'/'.$article['top_image'])}}">
                <div class="pd-10">
                    {{-- 更新日 --}}
                    <div class="updated_at pd-10">
                        {{$article['updated_at']}}
                    </div>
                    {{-- タイトル --}}
                    <div class="block-title pd-10">
                        {{$article['title']}}
                    </div>
                    {{-- 記事の中身 --}}
                    <div class="block-text pd-10">
                        {{Str::limit($article['content'], 300, '...' )}}
                    </div>
                    {{--タグ --}}
                    <div class="block-tags pd-10">
                        @foreach ($article['tags'] as $tags)
                        <object><a href="#" class="t-tag" ontouchstart="">
                                {{$tags['tag_name']}}</a></object>
                        @endforeach
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </article>
    {{ $page_link->appends(request()->query())->links('pagination::bootstrap-4') }}
</div>

@endsection