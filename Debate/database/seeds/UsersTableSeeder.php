<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $item_seeds = [
            [
                'name' => 'motu',
                'email'    => 'ktmn1018@yahoo.co.jp',
                'password' => '$2y$10$mHBQt2FAIpioBQ3YqoiQSOR3zW4sRoyijjm49GOKcEFo5tQUanfei',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ];

        foreach($item_seeds as $item) {
            DB::table('users')->insert($item);
        }
    }
}
