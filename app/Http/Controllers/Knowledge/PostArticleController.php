<?php

namespace App\Http\Controllers\Knowledge;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\MTag;
use App\Models\TArticle;
use Illuminate\Http\Request;

class PostArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * 記事作成画面初回表示
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // タグ情報取得
        $m_tag = MTag::get();

        /****** 記事ステータス取得 *************
        ★実装予定
        記事公開マスタなるテーブルを作成。
        　1.公開　2.アーカイブ
        記事を一般公開するかどうかのステータス。
         **************************************/

        return view('pages/host/post_article', compact('m_tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 記事を保存
        $t_article = TArticle::create([
            'article_kind' => 1,
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'top_image' => "パス",
            'content' => $request->content,
            'post_user' => Auth::user()->id,
            'status_id' => 1,
            'view_count' => 0,
        ]);

        // タグの保存
        // $this->saveTag($request, $t_article->id);

        return redirect('/knowledge/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 今回は特に使用しない（閲覧＝更新画面なのでedit,updateメソッドを使用する）
    }

    /**
     * Show the form for editing the specified resource.
     * 既存の記事更新処理
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($article_id)
    {
        // 対象記事を取得
        $article = TArticle::where('article_id', $article_id)->first();
        return view('pages/host/post_article', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     * 記事更新処理
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $article_id)
    {
        // 記事の更新
        $t_article = TArticle::where('article_id', $article_id)
            ->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'content' => $request->content,
                // 'status_id' => $request->status_id,
            ]);
        return redirect('/knowledge/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
