<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // データのクリア
        DB::table('t_article_tags')->truncate();

        DB::table('t_article_tags')->insert([
            [
                'article_id' => '1',
                'tag_id' => '1'
            ],
            [
                'article_id' => '1',
                'tag_id' => '2'
            ],
            [
                'article_id' => '1',
                'tag_id' => '3'
            ],
            [
                'article_id' => '2',
                'tag_id' => '1'
            ],
            [
                'article_id' => '2',
                'tag_id' => '2'
            ],
            [
                'article_id' => '2',
                'tag_id' => '3'
            ],
            [
                'article_id' => '3',
                'tag_id' => '4'
            ],
            [
                'article_id' => '4',
                'tag_id' => '5'
            ],
            [
                'article_id' => '5',
                'tag_id' => '1'
            ],


        ]);
    }
}
