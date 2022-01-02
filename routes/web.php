<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\ChatController;
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
|--------------------------------------------------------------------------
|　全ユーザ共通
|--------------------------------------------------------------------------
*/


// websocketテスト
Route::get('/test', function () {
    return view('test');
});
// マイページ
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//ホーム画面
Route::get('/', [UserHomeController::class, 'index']);

// チャット画面
Route::prefix('chat')->group(function () {
    //チャット画面
    Route::get('', [ChatController::class, 'chat']);
    //チャット送信
    Route::post('chatInsert', [ChatController::class, 'chatInsert']);
    //隔秒リロード
    Route::post('chatReload', [ChatController::class, 'chatReload']);
});


// 記事一覧画面
Route::prefix('article/list')->group(function () {
    //初期表示
    Route::get('', [ArticleController::class, 'getArticleList']);
    //タイトル検索
    Route::get('search', [ArticleController::class, 'getSearchArticleList']);
    //タグ検索
    Route::get('tag/{tag_name}', [ArticleController::class, 'getTagSearchArticleList']);
});







/*
|-------------------------------------------------------------------------
|管理者側画面
|-------------------------------------------------------------------------
*/

// 管理者画面
Route::prefix('hostArticle')->group(function () {
    //記事一覧
    Route::get('list', [HostArticleController::class, 'getHostArticleList']);
    //記事作成
    Route::get('create', [HostArticleController::class, 'createArticle']);
    //記事作成実行
    Route::get('executeCreate', [HostArticleController::class, 'executeCreateArticle']);
    //記事編集
    Route::get('update', [HostArticleController::class, 'updateArticle']);
});
