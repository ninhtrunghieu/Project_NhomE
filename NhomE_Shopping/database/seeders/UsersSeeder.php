<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Nguyễn Thanh Hùng',
            'email' => 'thanhhungg@gmail.com',
            'email_verified_at' => null,
            'password' => 'thanhhungg',
            'remember_token' => null,
            'created_at' => '2024-10-16 17:31:10',
            'updated_at' => '2024-10-03 17:31:16',
        ]);
    }
}
