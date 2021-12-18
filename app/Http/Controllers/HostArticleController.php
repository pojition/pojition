<?php

namespace App\Http\Controllers;

use App\Models\TArticle;
use App\Models\TArticleTag;
use App\Models\MTag;
use Illuminate\Http\Request;

class HostArticleController extends Controller
{
    /**
     * 初回ロード時
     */
    public function  getHostArticleList(Request $request)
    {

        $articles_obj = TArticle::orderBy('updated_at', 'ASC');

        //記事を取得(pagination実装)
        $articles = $articles_obj->offset(2 * ($request->input('page') - 1))->limit(2)->get()->toArray();
        $page_link = $articles_obj->paginate(2);

        $articles = (new ArticleController())->manufactArticles($articles);
        //タグ情報を全て取得
        $m_tags = MTag::all();

        return view('pages/host/hostArticles', compact('articles', 'page_link', 'm_tags'));
    }



    public function createArticle()
    {
        return view('pages/host/createArticle');
    }

    public function updateArticle()
    {
    }
}
