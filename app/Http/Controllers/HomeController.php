<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function showHome()
    {
        // $data = Log_Transaksi::all();
        $data = Penyewa::join('log_transaksi', 'log_transaksi.nik', '=', 'penyewa.nik')
            ->where('log_transaksi.tanggal_keluar', '>=', date('Y-m-d'))
            ->select('penyewa.*', 'log_transaksi.*')
            ->get();

        return view('home/index', compact("data"));
    }
}