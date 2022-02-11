<?php

namespace App\Http\Controllers;

use App\Models\TArticle;
use App\Models\TArticleTag;
use App\Models\TChat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserHomeController extends Controller
{

    public function index()
    {


        //記事を取得(更新日順に5件)
        $articles = TArticle::orderBy('updated_at', 'DESC')->take(3)->get()->toArray();

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
            $dt = new Carbon($articles[$i]['created_at']);
            $articles[$i]['created_at'] = $dt->format('Y年m月d日');
            $dt = new Carbon($articles[$i]['updated_at']);
            $articles[$i]['updated_at'] = $dt->format('Y年m月d日');
        }

        return view('pages.user_home', compact('articles'));
    }
}
