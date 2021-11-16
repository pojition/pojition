<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_articles', function (Blueprint $table) {
            // 記事ID
            $table->increments('article_id')->comment('記事ID');
            // 記事の種類
            $table->unsignedTinyInteger('article_kind')->comment('記事の種類');
            // タイトル
            $table->string('title', 255)->comment('タイトル');
            // サブタイトル
            $table->string('sub_title', 255)->comment('サブタイトル');
            //トップ画像
            $table->string('top_image', 30)->commnet('トップ画像');
            // 記事本文
            $table->text('content')->comment('記事本文');
            // 閲覧数
            $table->bigInteger('view_count')->comment('閲覧数');
            // 投稿者
            $table->unsignedInteger('post_user')->comment('投稿者');
            // 記事のステータスID
            $table->smallInteger('status_id')->comment('記事のステータス(アーカイブ機能)');

            //削除フラグ
            $table->boolean('is_deleted')->default(false)->comment('削除フラグ(1:削除済み)');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_articles');
    }
}
