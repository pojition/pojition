<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TChatUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // データのクリア
        DB::table('t_chat_users')->truncate();

        DB::table('t_chat_users')->insert([
            [
                'chat_user_id' => 1,
                'chat_user_name' => 'まお',

            ],
            [
                'chat_user_id' => 2,
                'chat_user_name' => '加藤さん',
            ],
            [
                'chat_user_id' => 3,
                'chat_user_name' => '社長',
            ],



        ]);
    }
}
