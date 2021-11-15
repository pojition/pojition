<article class="mg-top">
    <div id="article-title">{{$title_slot}}</div>
    <div class="article-content">
        @foreach ($articles as $article)
        <div class="article-block mg-top mg-bottom border-all">
            <img src="{{asset('images/pages/user_home/top-image.jpg')}}">
            <div class="block-title pd-10">
                {{$article->title}}
            </div>
            <div class="block-text pd-10">
                {{$article->text}}
            </div>
            <div class="updated_at pd-10">
                {{$article->updated_at}}
            </div>

        </div>
        @endforeach
    </div>
</article>