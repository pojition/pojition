<article>
    <div id="article-title">{{$title}}</div>
    <div class="article-content">

        @foreach ($articles as $article)
        <a href="#" class="article-block mg-top mg-bottom border-all">
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
                    <object><a href="{{url('/articles/tag').'/'.$tags['tag_name']}}" class="t-tag" ontouchstart="">
                            {{$tags['tag_name']}}</a></object>
                    @endforeach
                </div>
            </div>
        </a>
        @endforeach

    </div>
</article>