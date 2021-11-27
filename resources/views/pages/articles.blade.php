@extends('layout.mainLayout')

{{-- 各ファイル読み込み --}}
@section('LoadJS')
<script src="{{asset('js/components/searchbar.js')}}"> </script>
@endsection
@section('LoadCSS')
<link rel="stylesheet" href="{{asset('css/pages/articles.css')}}">
@endsection
{{-- ここまでファイル読み込み --}}

{{-- ここから本文 --}}
@section('mainContent')
<div class="wrapper">
    <div class="main">
        <div class="article-block-wrap">
            @isset($search)
            <div class="search-result">
                Search results for「{{$search['name']}}」：{{$search['count']}}
            </div>
            @endisset
            @isset($tag)
            <div class="tag-result">
                Tag-Search results for「{{$tag['name']}}」：{{$tag['count']}}
            </div>
            @endisset
            <x-articlecontent title='Articles' :articles=$articles />
            {{ $page_link->appends(request()->query())->links('pagination::bootstrap-4') }}

        </div>
        <div class="search-block-wrap border-all">
            <x-searchbar :mtags=$m_tags />
        </div>
    </div>


    @endsection
    {{-- 本文ここまで --}}