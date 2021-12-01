<section class="search-bar">

    <div class="search-title">Search</div>
    <div class="search-text">
        <input type="text" value="" placeholder="キーワードを入力してください">
    </div>

    <div class="tag-title">Category</div>
    @foreach ($mtags as $m_tag)
    <a class="t-tag" href="{{url('article/list/search/tag').'/'.$m_tag->tag_name}}">
        {{$m_tag->tag_name}}
    </a>
    @endforeach
</section>