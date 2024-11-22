<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['id' => 1, 'created_at' => '2024-10-12 09:16:20', 'updated_at' => '2024-10-12 09:16:20', 'email' => 'khachhang2@gmail.com', 'name' => 'Khách hàng 2', 'password' => 'thanhhungg'],
            ['id' => 2, 'created_at' => '2024-10-12 09:19:20', 'updated_at' => '2024-10-12 09:19:20', 'email' => 'khachhang3@gmail.com', 'name' => 'Khách hàng 3', 'password' => 'ninhhieu'],
            ['id' => 3, 'created_at' => '2024-10-12 09:53:07', 'updated_at' => '2024-10-12 09:53:07', 'email' => 'khachhang1@gmail.com', 'name' => 'Khách hàng 1', 'password' => 'ngockhanh'],
        ]);
    }
}

