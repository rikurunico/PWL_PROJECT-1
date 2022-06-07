<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert(
            [
                [
                    'nama_supplier' => 'GAP',
                    'deskripsi' => 'The Gap adalah sebuah perusahaan publik asal Amerika Serikat yang bergerak di industri retail.',
                    'gambar' => 'images/supplier-1.png'
                ],
                [
                    'nama_supplier' => 'H&M',
                    'deskripsi' => 'H&M yang juga dikenal sebagai Hennes & Mauritz merupakan sebuah brand fashion retail asal Swedia.',
                    'gambar' => 'images/supplier-2.png'
                ],
                [
                    'nama_supplier' => 'ZARA',
                    'deskripsi' => 'Zara adalah salah satu perusahaan mode internasional terbesar. Perusahaan ini dimiliki oleh Inditex.',
                    'gambar' => 'images/supplier-3.png'
                ],
                [
                    'nama_supplier' => 'Bershka',
                    'deskripsi' => 'Bershka adalah rantai ritel terbesar kedua berdasarkan jumlah toko di seluruh operasi Inditex.',
                    'gambar' => 'images/supplier-4.png'
                ],
                [
                    'nama_supplier' => 'UNIQLO',
                    'deskripsi' => 'UNIQLO adalah perusahaan Jepang yang menyediakan pakaian kasual untuk semua orang.',
                    'gambar' => 'images/supplier-5.png'
                ]
            ]
        );
    }
}
