<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogTransaksiSeeder extends Seeder
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
                'tanggal_keluar' => '2023-10-28',
                'status_pembayaran' => 1
            ],
            [
                'kode_kamar' => 'K002',
                'nik' => '1234567891',
                'tanggal_masuk' => '2023-05-01',
                'tanggal_keluar' => '2023-10-25',
                'status_pembayaran' => 0
            ],
            [
                'kode_kamar' => 'K003',
                'nik' => '1234567892',
                'tanggal_masuk' => '2023-05-01',
                'tanggal_keluar' => '2023-10-10',
                'status_pembayaran' => 0
            ],
            [
                'kode_kamar' => 'K004',
                'nik' => '1234567893',
                'tanggal_masuk' => '2023-05-01',
                'tanggal_keluar' => '2023-05-30',
                'status_pembayaran' => 0
            ],
        ];
        DB::table('log_transaksi')->insert($logTransaksi);
    }
}