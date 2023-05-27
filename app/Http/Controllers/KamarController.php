<?php

namespace App\Http\Controllers;

use App\Models\Log_Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KamarController extends Controller
{
    public function showKamarToSewa()
    {
        $logTransaksi = Log_Transaksi::rightJoin('kamar', 'kamar.kode_kamar', '=', 'log_transaksi.kode_kamar')
            // ->where('log_transaksi.tanggal_keluar', '<=', date('Y-m-d'))
            ->select('*')->get();
        $user = Auth::user();
        return view('sewa/kamarSewa', compact("logTransaksi", "user"));
    }
    public function sendKamarToSewa(Request $request)
    {
        // print($request['kode_kamar']);
        return view('sewa/penyewaSewa', ['kode_kamar' => $request['kode_kamar']]);
    }
}