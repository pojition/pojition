<section class="search-bar">

    ここに検索スペースを作成します。
    <input type="text" value="" placeholder="ここになにか入力してください">
    @foreach ($mtags as $m_tag)
    <a class="t-tag" href="{{url('article/list/search/tag').'/'.$m_tag->tag_name}}">
        {{$m_tag->tag_name}}
    </a>
    @endforeach
</section>