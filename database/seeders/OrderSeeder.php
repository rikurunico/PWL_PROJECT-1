<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            [
                'user_id' => '1',
                'total' => 100000,
                'tanggal_order' => '2022-01-01'
            ],
            [
                'user_id' => '2',
                'total' => 150000,
                'tanggal_order' => '2022-02-11'
            ]
            ]);  
    }
}
