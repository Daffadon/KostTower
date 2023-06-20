<?php

namespace Database\Seeders;

use DB;
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
                'nama' => 'Daffa',
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
                'nama' => 'Putra',
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
                'nama' => 'Narendra',
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
                'nama' => 'Firhan',
                'ttl' => '1990-01-01',
                'alamat' => '123 Main St, City',
                'agama' => 'Islam',
                'status' => 'Single',
                'pekerjaan' => 'Engineer',
                'kewarganegaraan' => 'Indonesian',
                'telepon' => '123456789',
            ],
            [
                'nik' => '1234567894',
                'nama' => 'Imam',
                'ttl' => '1990-01-01',
                'alamat' => '123 Main St, City',
                'agama' => 'Islam',
                'status' => 'Single',
                'pekerjaan' => 'Engineer',
                'kewarganegaraan' => 'Indonesian',
                'telepon' => '123456789',
            ],
            [
                'nik' => '1234567895',
                'nama' => 'Haekal',
                'ttl' => '1990-01-01',
                'alamat' => '123 Main St, City',
                'agama' => 'Islam',
                'status' => 'Single',
                'pekerjaan' => 'Engineer',
                'kewarganegaraan' => 'Indonesian',
                'telepon' => '123456789',
            ],
            [
                'nik' => '1234567896',
                'nama' => 'NT',
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