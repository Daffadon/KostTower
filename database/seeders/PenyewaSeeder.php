<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $penyewa = [
            [
                'nik' => '1234567890',
                'nama' => 'John Doev',
                'ttl' => '1990-01-01',
                'alamat' => '123 Main St, City',
                'agama' => 'Islam',
                'status' => 'Single',
                'pekerjaan' => 'Engineer',
                'kewarganegaraan' => 'Indonesian',
                'telepon' => '123456789',
            ],
            [
                'nik' => '1234567891',
                'nama' => 'John Doea',
                'ttl' => '1990-01-01',
                'alamat' => '123 Main St, City',
                'agama' => 'Islam',
                'status' => 'Single',
                'pekerjaan' => 'Engineer',
                'kewarganegaraan' => 'Indonesian',
                'telepon' => '123456789',
            ],
            [
                'nik' => '1234567892',
                'nama' => 'John Doek',
                'ttl' => '1990-01-01',
                'alamat' => '123 Main St, City',
                'agama' => 'Islam',
                'status' => 'Single',
                'pekerjaan' => 'Engineer',
                'kewarganegaraan' => 'Indonesian',
                'telepon' => '123456789',
            ],
            [
                'nik' => '1234567893',
                'nama' => 'John Does',
                'ttl' => '1990-01-01',
                'alamat' => '123 Main St, City',
                'agama' => 'Islam',
                'status' => 'Single',
                'pekerjaan' => 'Engineer',
                'kewarganegaraan' => 'Indonesian',
                'telepon' => '123456789',
            ],
        ];

        DB::table('penyewa')->insert($penyewa);
    }
}