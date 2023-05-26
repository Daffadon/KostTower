<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller {
    function showPenyewa(Request $req) {
        $key= $req->id;
        $data= Penyewa::join('log_transaksi', 'log_transaksi.nik', '=', 'penyewa.nik')  
        ->join('kamar', 'log_transaksi.kode_kamar', '=', 'kamar.kode_kamar')
        ->where('log_transaksi.nik', $key)
        ->get();
        return view('detail.index', compact('data'));
    }
}