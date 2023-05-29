<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class logTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $logTransaksi = [
            [
                'kode_kamar' => 'K001',
                'nik' => '1234567890',
                'tanggal_masuk' => '2023-05-01',
                'tanggal_keluar' => '2023-05-29',
            ],
            [
                'kode_kamar' => 'K002',
                'nik' => '1234567891',
                'tanggal_masuk' => '2023-05-01',
                'tanggal_keluar' => '2023-05-30',
            ],
            [
                'kode_kamar' => 'K003',
                'nik' => '1234567892',
                'tanggal_masuk' => '2023-05-01',
                'tanggal_keluar' => '2023-06-10',
            ],
            [
                'kode_kamar' => 'K004',
                'nik' => '1234567893',
                'tanggal_masuk' => '2023-05-01',
                'tanggal_keluar' => '2023-05-30',
            ],
        ];
        DB::table('log_transaksi')->insert($logTransaksi);
    }
}