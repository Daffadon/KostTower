<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;

class HomeController extends Controller
{
    function showHome()
    {
        $data = Penyewa::join('log_transaksi', 'log_transaksi.NIK', '=', 'penyewa.NIK')
            ->where('log_transaksi.tanggal_keluar', '>=', date('Y-m-d'))
            ->select('penyewa.*', 'log_transaksi.*')->get();
        return view('pages.home.index', compact("data"));
    }
}