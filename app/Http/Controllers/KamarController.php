<?php

namespace App\Http\Controllers;

use App\Models\Log_Transaksi;

class KamarController extends Controller
{
    public function showKamar()
    {
        $logTransaksi = Log_Transaksi::rightJoin('kamar', 'kamar.kode_kamar', '=', 'log_transaksi.kode_kamar')
            ->select('kamar.kode_kamar')->get();
        return view('addKamar/index', compact("logTransaksi"));
    }
}