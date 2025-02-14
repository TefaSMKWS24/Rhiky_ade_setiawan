<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class kasirseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_kasir' => 'KS01',
                'nama_kasir' => 'kasir 1',
                'password' => hash::make('12345678'),
            ]
            ];
        DB::table('kasir')->insert($data);

    }
}
