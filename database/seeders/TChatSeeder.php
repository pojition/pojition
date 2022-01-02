<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // データのクリア
        DB::table('t_chats')->truncate();

        DB::table('t_chats')->insert([
            [
                'chat_id' => 1,
                'content' => 'こんにちは！今大丈夫ですか？',
                'chat_user_id' => 1
            ],
            [
                'chat_id' => 2,
                'content' => 'ちょっと忙しいです',
                'chat_user_id' => 2
            ],
            [
                'chat_id' => 3,
                'content' => '分かりました、また後で連絡します',
                'chat_user_id' => 1
            ],
            [
                'chat_id' => 4,
                'content' => '私も混ぜてください',
                'chat_user_id' => 3
            ],


        ]);
    }
}
