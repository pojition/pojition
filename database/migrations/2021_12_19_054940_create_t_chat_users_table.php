<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTChatUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_chat_users', function (Blueprint $table) {
            // チャットユーザID
            $table->increments('chat_user_id')->comment('チャットユーザID');
            //名前
            $table->text('chat_user_name')->comment('チャットユーザ名');
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
        Schema::dropIfExists('t_chat_users');
    }
}
