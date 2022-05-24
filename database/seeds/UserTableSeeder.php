<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        DB::table('users')->insert([
            [
                'email' => 'admin@gmail.com',
                'name' => 'Admin',
                'id_user' => 'admin',
                'password' => Hash::make('123456'),
                'deparment_id' => 1,
                'role_id' => 1,
                'status' => 1,
                'created_at' => $now,
                'updated_at' =>  $now,
                'deleted_at' => null,
            ],
             [
                'email' => 'tranthangduc0603@gmail.com',
                'name' => 'Trần Thăng Đức',
                'id_user' => 'ductt',
                'password' => Hash::make('123456'),
                'deparment_id' => 1,
                'role_id' => 1,
                'status' => 1,
                'created_at' => $now,
                'updated_at' =>  $now,
                'deleted_at' => null,
             ]
        ]);
    }
}
