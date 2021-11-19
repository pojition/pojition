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
                'tag_name' => '宮沢賢治',
            ],
            [
                'tag_name' => 'wikipedia',
            ],
            [
                'tag_name' => '藤井聡太',
            ],
            [
                'tag_name' => '羽生善治',
            ],
            [
                'tag_name' => '日本国憲法',
            ],
            [
                'tag_name' => '夏目漱石',
            ],

        ]);
    }
}
