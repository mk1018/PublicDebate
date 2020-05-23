<?php

use Illuminate\Database\Seeder;

class DiscussesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('discusses')->delete();
        $item_seeds = [
            [
                'topic_id'   => 'A-1',
                'discuss_id' => 'A-1-1',
                'text'       => 'お前らぶったおす',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ];

        foreach($item_seeds as $item) {
            DB::table('discusses')->insert($item);
        }

    }
}
