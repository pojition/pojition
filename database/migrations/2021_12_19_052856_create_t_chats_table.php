<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_chats', function (Blueprint $table) {
            // チャットID
            $table->increments('chat_id')->comment('チャットID');
            //チャット本文
            $table->text('content')->comment('チャット本文');
            //投稿者ID
            $table->integer('chat_user_id')->comment('ユーザID');
            // 投稿日付、更新日
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
        Schema::dropIfExists('t_chats');
    }
}
