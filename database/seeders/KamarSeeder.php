<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $kamar = [
            [
                'kode_kamar' => 'K001',
                'lantai' => 1,
                'kamar_mandi_dalam' => true,
                'isBalkon' => true,
                'isAC' => true,
                'isWaterHeater' => false,
                'isKingBed' => true,
                'harga' => 150000,
            ],
            [
                'kode_kamar' => 'K002',
                'lantai' => 2,
                'kamar_mandi_dalam' => true,
                'isBalkon' => true,
                'isAC' => true,
                'isWaterHeater' => false,
                'isKingBed' => true,
                'harga' => 150000,
            ],
            [
                'kode_kamar' => 'K003',
                'lantai' => 2,
                'kamar_mandi_dalam' => true,
                'isBalkon' => true,
                'isAC' => true,
                'isWaterHeater' => false,
                'isKingBed' => true,
                'harga' => 150000,
            ],
            [
                'kode_kamar' => 'K004',
                'lantai' => 1,
                'kamar_mandi_dalam' => true,
                'isBalkon' => true,
                'isAC' => true,
                'isWaterHeater' => false,
                'isKingBed' => true,
                'harga' => 150000,
            ],
            [
                'kode_kamar' => 'K005',
                'lantai' => 2,
                'kamar_mandi_dalam' => true,
                'isBalkon' => true,
                'isAC' => true,
                'isWaterHeater' => false,
                'isKingBed' => true,
                'harga' => 150000,
            ],
        ];

        DB::table('kamar')->insert($kamar);
    }
}