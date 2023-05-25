<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller {
    function showPenyewa(Request $req) {
        $key= $req->id;
        $data= Penyewa::join('log_transaksi', 'log_transaksi.NIK', '=', 'penyewa.NIK')  
        ->join('kamar', 'log_transaksi.Kode_kamar', '=', 'kamar.Kode_kamar')
        ->where('log_transaksi.NIK', $key)
        ->get();
        return view('detail.index', compact('data'));
    }
}
