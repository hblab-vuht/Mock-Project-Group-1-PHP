<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DeparmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        DB::table('deparments')->insert([
     [
          'name' => 'HB1',
          'description' => 'HB_1',
          'status'=> 1,
          'created_at' =>  $now ,
          'updated_at' =>  $now ,
      ],
      [
          'name' => 'HB2',
          'description' => 'HB_2',
          'status'=> 1,
          'created_at' =>  $now ,
          'updated_at' =>  $now ,
      ],
      [
          'name' => 'HB3',
          'description' => 'HB_3',
          'status'=> 1,
          'created_at' =>  $now ,
          'updated_at' =>  $now ,
      ],
     [
          'name' => 'HB4',
          'description' => 'HB_4',
          'status'=> 1,
          'created_at' =>  $now ,
          'updated_at' =>  $now ,
          ]
        ]);
    }
}

