<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\HostArticleController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|-------------------------------------------------------------------------
|ユーザ側画面
|-------------------------------------------------------------------------
*/
//ユーザホーム画面
Route::get('/', [UserHomeController::class, 'index']);

//記事一覧画面
Route::get('/article/list', [ArticleController::class, 'getArticleList']);
//検索ボックス入力時はこっち
Route::get('/article/list/search', [ArticleController::class, 'getSearchArticleList']);
//タグ検索はこっち
Route::get('/article/list/search/tag/{tag_name}', [ArticleController::class, 'getTagSearchArticleList']);


/*
|-------------------------------------------------------------------------
|管理者側画面
|-------------------------------------------------------------------------
*/
//管理者ホーム画面
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//管理者記事一覧画面
Route::get('/hostArticle/list', [HostArticleController::class, 'getHostArticleList']);

//管理者記事作成画面
Route::get('/hostArticle/create', [HostArticleController::class, 'createArticle']);

//記事作成実行
Route::get('/hostArticle/executeCreate', [HostArticleController::class, 'executeCreateArticle']);

//管理者記事編集画面
Route::get('/hostArticle/update', [HostArticleController::class, 'updateArticle']);
