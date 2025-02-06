<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_kasir' => 'KS01',
                'nama_kasir' => 'Kasir 1',
                'password' => Hash::make('2121'),
            ],
        ];

        DB::table('data_kasir')->insert($data);
    }
}
