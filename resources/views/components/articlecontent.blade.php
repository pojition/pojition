<article class="mg-top">
    <div id="article-title">{{$title}}</div>
    <div class="article-content">
        @foreach ($articles as $article)
        <a href="#" class="article-block mg-top mg-bottom border-all">
            <img class="article-fil" src="{{asset('images/t_articles'.'/'.$article->top_image)}}">
            <div class="block-title pd-10">
                {{$article->title}}
            </div>
            <div class="block-text pd-10">
                {{Str::limit($article->content, 300, '...' )}}
            </div>
            <div class="updated_at pd-10">
                {{$article->updated_at}}
            </div>

        </a>
        @endforeach
    </div>
</article>