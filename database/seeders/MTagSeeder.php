<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_tags')->insert([
            [
                'tag_name' => '30代',
            ],
            [
                'tag_name' => 'Jquery',
            ],
            [
                'tag_name' => 'レスポンシブ',
            ],
            [
                'tag_name' => 'Webデザイナー',
            ],
            [
                'tag_name' => 'Webデザイン',
            ],

        ]);
    }
}
