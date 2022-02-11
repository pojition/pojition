<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Knowledge\HostArticleController;
use App\Http\Controllers\Knowledge\PostArticleController;
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

//記事画面
Route::get('article/show/{id}', [ArticleController::class, 'showArticle']);






/*
|-------------------------------------------------------------------------
|管理者側画面
|-------------------------------------------------------------------------
*/

// 記事関連
Route::prefix('knowledge')->group(function () {
    //記事一覧
    Route::get('list', [HostArticleController::class, 'getHostArticleList']);
    //記事作成関連（Restful化、この１行でCRUD全てのルーティングを管理できる！）
    Route::resource('postArticle', PostArticleController::class);
});
