<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewa;

class HomeController extends Controller
{
    function showHome(){
    $data= Penyewa::join('log_transaksi', 'log_transaksi.NIK', '=', 'penyewa.NIK')
    ->select('penyewa.*', 'log_transaksi.*')
    ->get();
    return view('home.index',compact("data"));
    }
}
