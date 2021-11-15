<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_articles')->insert([
            ['title' => 1, 'text' => 'aaa', 'updated_at' => '111'],
            ['title' => 2, 'text' => 'bbb', 'updated_at' => '222'],
            ['title' => 3, 'text' => 'ccc', 'updated_at' => '333'],

        ],);
    }
}
