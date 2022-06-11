<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_detail')->insert([
            [
                'produk_id' => 1,
                'order_id' => 1,
                'qty' => 1
            ],
            [
                'produk_id' => 2,
                'order_id' => 2,
                'qty' => 2
            ]
        ]); 
    }
}
