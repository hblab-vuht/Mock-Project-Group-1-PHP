<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
          DB::table('categories')->insert([
              [
            'name' => 'Lương',
            'description' => 'Phụ trách quản lý lương cho nhân viên công ty',
            'status' => 1,
            'created_at' =>  $now ,
            'updated_at' =>  $now ,
        ],
        [
            'name' => 'Cơ sở vật chất',
            'description' => 'Quản lý cơ sở vật chất',
            'status' => 1,
            'created_at' =>  $now ,
            'updated_at' =>  $now ,
        ],
        [
            'name' => 'Bảo hiểm',
            'description' => 'Phụ trách bảo hiểm của nhân viên trong công ty',
            'status' => 1,
            'created_at' =>  $now ,
            'updated_at' =>  $now ,
        ],
        [
            'name' => 'Gửi xe',
            'description' => 'Quản lý gửi xe của nhân vien trong công ty',
            'status' => 1,
            'created_at' =>  $now ,
            'updated_at' =>  $now ,
        ]
        ]);
    }
}
