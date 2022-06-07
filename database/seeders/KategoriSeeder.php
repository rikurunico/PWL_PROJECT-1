<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'LD',
                'keterangan' => 'Laki-laki Dewasa',
            ],
            [
                'nama_kategori' => 'LA',
                'keterangan' => 'Laki-laki Anak-anak',
            ],
            [
                'nama_kategori' => 'PD',
                'keterangan' => 'Perempuan Dewasa',
            ],
            [
                'nama_kategori' => 'PA',
                'keterangan' => 'Perempuan Anak-anak',
            ]
            ]);  
    }
}
