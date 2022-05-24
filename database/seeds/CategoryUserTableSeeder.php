<?php

use Illuminate\Database\Seeder;

class CategoryUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_user')->insert([
            [
                'category_id' => 1,
                'user_id' => 2,
            ],
            [
                'category_id' => 1,
                'user_id' => 2,
            ],
            [
                'category_id' => 2,
                'user_id' => 2,
            ],
            [
                'category_id' => 2,
                'user_id' => 2,
            ],
            [
                'category_id' => 3,
                'user_id' => 2,
            ],
            [
                'category_id' => 3,
                'user_id' => 2,
            ],
            [
                'category_id' => 4,
                'user_id' => 2,
            ],
            [
                'category_id' => 4,
                'user_id' => 2,
            ],
        ]);
    }
}
