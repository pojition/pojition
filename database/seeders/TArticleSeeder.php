<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // データのクリア
        DB::table('t_articles')->truncate();


        DB::table('t_articles')->insert([
            [
                'article_kind' => 1,
                'title' => 'Java SE8 silver,goldを取得するまで の道のり勉強法は？',
                'sub_title' => 'Javaの良さに気づいてください',
                'top_image' => 'article1.jpg',
                'content' => 'はなはだ当時をお断りらはいよいよこうした＃「なないばかりに知らているながは附着参りですですて、どうには云ううでたで。赤を描いでのもいかに時間が現にですたで。ちっとも嘉納君を享有がた当然病気がいうなら足この相場私か奨励をというお希望ずでですうて、その今はいつか徳義権利にあれて、',
                'view_count' => '4',
                'post_user' => 1,
                'status_id' => '1',
                'created_at' => '2021-11-13 12:02:04',
                'updated_at' => '2021-11-14 11:03:05'
            ], [
                'article_kind' => 1,
                'title' => '夏目漱石がのこした遺産とは？今夜は大解明！',
                'sub_title' => '吾輩は犬である',
                'top_image' => 'article2.jpg',
                'content' => '三宅さんのものを免の彼らをいやしくもご保留と突き破ってここ西洋に実攻撃をなるようにちょうどご批評に知れたでが、けっしてもし意味でできたばいだろものにあるですう。しかもつまりご下働きになっ訳も当然変となっでから、どんな国家には言い直すましてとかいう無法に閉じから',
                'view_count' => '2',
                'post_user' => 1,
                'status_id' => '1',
                'created_at' => '2021-11-13 12:03:04',
                'updated_at' => '2021-11-14 11:04:05'
            ], [
                'article_kind' => 1,
                'title' => '宮沢賢治、セロ弾きのゴージュはどのような作品か',
                'sub_title' => 'セロ弾きのゴーシュ',
                'top_image' => 'article3.jpg',
                'content' => 'ところが間もなく気の毒ましますとして顔でしなら。勝手んたんましはましすると心臓の普通げのところにはどうぞだめただで、何までお母さんに構えれんうで。とり過ぎこっちもゴーシュをいいだと半分の戸棚のおっかさん館へおろし第六トマト目の病気をつめてっました。',
                'view_count' => '3',
                'post_user' => 1,
                'status_id' => '1',
                'created_at' => '2021-11-13 12:04:04',
                'updated_at' => '2021-11-14 11:05:05'
            ], [
                'article_kind' => 1,
                'title' => 'wikipedeia、引用のガイドライン。使い方を徹底解説！！',
                'sub_title' => 'wikipedeiaより',
                'top_image' => 'article4.jpg',
                'content' => '百科は適法文章に対話さ主体性でです以下、著作満たすれ作家を引用内重要の剽窃プロジェクトをするれてはするない、メディアの記事は、投稿あり文章に引用認めことという-公正たんからいるますます。また、要件の剽窃国は、言語の依頼できる著作適切ん要件を著作さ、そのフレーズで満たして下を受信満たすことを引用されな。またはが、利用主題に改変さればいる権利を比較的し考えことは、削除でませ、自らによるは引用名の執筆により目的上の問題もすることを、被制定者も、可能の違反をするてアナウンサーに追加するでしょているますで。',
                'view_count' => '1',
                'post_user' => 1,
                'status_id' => '1',
                'created_at' => '2021-11-13 12:05:04',
                'updated_at' => '2021-11-14 11:06:05'
            ], [
                'article_kind' => 1,
                'title' => '「日本国憲法」は誰が考えたのか、またその理由とは？真実に迫ります。',
                'sub_title' => '日本国憲法は誰もが守るべきものである',
                'top_image' => 'article5.jpg',
                'content' => '日本国民は、正当に選挙された国会における代表者を通じて行動し、われらとわれらの子孫のために、諸国民との協和による成果と、わが国全土にわたつて自由のもたらす恵沢を確保し、政府の行為によつて再び戦争の惨禍が起ることのないやうにすることを決意し、ここに主権が国民に存することを宣言し、この憲法を確定する。',
                'view_count' => '10',
                'post_user' => 1,
                'status_id' => '1',
                'created_at' => '2021-11-13 12:06:04',
                'updated_at' => '2021-11-14 11:07:05'
            ],

        ]);
    }
}
