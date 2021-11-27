<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserHomeController;
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


//ユーザホーム画面
Route::get('/', [UserHomeController::class, 'index']);

//記事一覧画面
Route::get('/article/list', [ArticleController::class, 'getArticleList']);
//検索ボックス入力時はこっち
Route::get('/article/list/search', [ArticleController::class, 'getSearchArticleList']);
//タグ検索はこっち
Route::get('/article/list/search/tag/{tag_name}', [ArticleController::class, 'getTagSearchArticleList']);
