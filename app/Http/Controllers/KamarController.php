<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Log_Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KamarController extends Controller
{
    function showAddKamar() {
        $kamar= Kamar::all();
        return view('addKamar.index', compact("kamar"));
    }

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

    function addKamar(Request $req) {

        $dalam= $this->isChecked($req->input('dalam', false));
        $ac= $this->isChecked($req->input('ac', false));
        $balkon= $this->isChecked($req->input('balkon', false));
        $heater= $this->isChecked($req->input('heater', false));
        $bed= $this->isChecked($req->input('bed', false));

        $model= new Kamar;
        $model->kode_kamar= $req->kode_kamar;
        $model->lantai= $req->lantai;
        $model->kamar_mandi_dalam= $dalam;
        $model->isAc= $ac;
        $model->isBalkon= $balkon;
        $model->isWaterHeater= $heater;
        $model->isKingBed= $bed;
        $model->harga= $req->harga;
        $model->save();

        return redirect('/list-kamar');
    }

    function deleteKamar(Request $req) {
        
        $kode= $req -> kode;
        $data = Kamar::findOrFail($kode);
        $data->delete();
        return back();
        // return redirect('/list-kamar');  
    }

    public function isChecked($var) {
        if ($var) {
            return 1;
        } else {
            return 0;
        }
    }

    public function showListKamar() {
        $kamar= Kamar::all();
        return view('listKamar.index', compact("kamar"));
    }
}