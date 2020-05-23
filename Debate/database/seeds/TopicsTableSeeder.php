<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->delete();
        $item_seeds = [
            [
                'topic_no' => 'A-1',
                'title'    => 'twitterについて',
                'content'  => '表示形式が納得いかない',
                'twitter_url' => 'http://aiueo/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'topic_no' => 'A-2',
                'title'    => 'ポケモンについて',
                'content'  => '種類が多すぎて覚えられない',
                'twitter_url' => 'http://aiueo/',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ];

        foreach($item_seeds as $item) {
            DB::table('topics')->insert($item);
        }

    }
}
