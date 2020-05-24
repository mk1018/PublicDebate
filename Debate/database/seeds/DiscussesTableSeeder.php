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
                'topic_no'   => 'A-1',
                'discuss_id' => 'A-1-1',
                'faction'    => 'agree',
                'text'       => 'テストだよー',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'topic_no'   => 'A-1',
                'discuss_id' => 'A-1-2',
                'faction'    => 'opposition',
                'text'       => 'テストだよー２',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'topic_no'   => 'A-1',
                'discuss_id' => 'A-1-3',
                'faction'    => 'opposition',
                'text'       => 'テストだよー２',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'topic_no'   => 'A-1',
                'discuss_id' => 'A-1-4',
                'faction'    => 'agree',
                'text'       => 'テストだよー２',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'topic_no'   => 'A-1',
                'discuss_id' => 'A-1-5',
                'faction'    => 'opposition',
                'text'       => 'テストだよー２',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'topic_no'   => 'A-2',
                'discuss_id' => 'A-2-1',
                'faction'    => 'agree',
                'text'       => 'テストだよー２',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ];

        foreach($item_seeds as $item) {
            DB::table('discusses')->insert($item);
        }

    }
}
