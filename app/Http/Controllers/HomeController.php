<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewa;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function showHome()
    {
        // $data = Log_Transaksi::all();
        $data = Penyewa::join('log_transaksi', 'log_transaksi.NIK', '=', 'penyewa.NIK')
            ->where('log_transaksi.tanggal_keluar', '<=', date('Y-m-d'))
            ->select('penyewa.*', 'log_transaksi.*')->get();
        $user = Auth::user();
        return view('home/index', compact("data", "user"));
    }
}