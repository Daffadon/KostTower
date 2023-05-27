<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    function addKamar() {
        return view('addKamar.index');
    }
}
