<?php

namespace App\Http\Controllers;

use App\Models\TArticle;
use App\Models\TArticleTag;
use App\Models\MTag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /**
     * 初回ロード時
     */
    public function  getArticleList()
    {

        $articles_obj = TArticle::orderBy('updated_at', 'ASC');

        //記事を取得(pagination実装)
        $articles = $articles_obj->take(3)->get()->toArray();
        $page_link = $articles_obj->paginate(3);

        $articles = $this->manufactArticles($articles);
        //タグ情報を全て取得
        $m_tags = MTag::all();

        return view('pages/articles', compact('articles', 'page_link', 'm_tags'));
    }


    /**
     * 記事検索時(テキスト検索)
     */
    public function getSearchArticleList(Request $request)
    {
        // 検索条件を取得
        $word = $request->input('word');

        $articles_obj = TArticle::orderBy('updated_at', 'ASC')->where('title', 'like', '%' . $word . '%');
        $search = [];
        $search['name'] = $word;
        $search['count'] = $articles_obj->count();


        //記事を取得(pagination実装)
        $articles = $articles_obj->take(3)->get()->toArray();
        $page_link = $articles_obj->paginate(3);

        $articles = $this->manufactArticles($articles);

        //タグ情報を全て取得
        $m_tags = MTag::all();

        return view('pages/articles', compact('articles', 'page_link', 'm_tags', 'search'));
    }


    /**
     * 記事検索時(タグ検索)
     */
    public function getTagSearchArticleList($tag_name)
    {
        $articles_obj =
            TArticle
            ::join('t_article_tags', 't_article_tags.article_id', '=', 't_articles.article_id')
            ->join('m_tags', 't_article_tags.tag_id', '=', 'm_tags.tag_id')
            ->where('tag_name', '=', $tag_name);
        $tag = [];
        $tag['name'] = $tag_name;
        $tag['count'] = $articles_obj->count();

        //記事を取得(pagination実装)
        $articles = $articles_obj->take(3)->get()->toArray();
        $page_link = $articles_obj->paginate(3);

        $articles = $this->manufactArticles($articles);
        //タグ情報を全て取得
        $m_tags = MTag::all();

        return view('pages/articles', compact('articles', 'page_link', 'm_tags', 'tag'));
    }



    /**
     * 記事にタグ情報を付加する関数
     */
    public function manufactArticles($articles)
    {
        //取得した記事を1件ずつループ
        for ($i = 0; $i < count($articles); $i++) {
            //タグ情報を付加
            $article_id = $articles[$i]['article_id'];
            $t_tags = TArticleTag
                ::join('m_tags', 't_article_tags.tag_id', '=', 'm_tags.tag_id')
                ->where('article_id', $article_id)
                ->get()
                ->toArray(); //コレクション型→連想配列
            $articles[$i]['tags'] = $t_tags;

            //日付のフォーマットを変更
            $dtc = new Carbon($articles[$i]['created_at']);
            $articles[$i]['created_at'] = $dtc->format('Y年m月d日');
            $dtu = new Carbon($articles[$i]['updated_at']);
            $articles[$i]['updated_at'] = $dtu->format('Y年m月d日');
        }

        return $articles;
    }
}
