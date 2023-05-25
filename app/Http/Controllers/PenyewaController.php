<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    function showPenyewa()
    {
        $penyewa = Penyewa::all();
        return view('detail.detailPenyewa', compact('penyewa'));
    }
}