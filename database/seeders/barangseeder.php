<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_barang' => 'BR01',
                'nama_barang' => 'minyak',
                'harga' => '10000',
                'stok' => '10',
                'kode_kategori' => 'KT01',
            ],
            [
                'kode_barang' => 'BR02',
                'nama_barang' => 'beras',
                'harga' => '20000',
                'stok' => '20',
                'kode_kategori' => 'KT02',
            ],
        ];

        DB::table('barang')->insert($data);
    }
}
