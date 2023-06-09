<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function showListKamar()
    {
        $kamar = Kamar::all();
        return view('pages.kamar.index', compact("kamar"));
    }
    function showAddKamar()
    {
        $kamar = Kamar::all();
        return view('pages.kamar.add', compact("kamar"));
    }

    function addKamar(Request $req)
    {
        $dalam = $this->isChecked($req->input('dalam', false));
        $ac = $this->isChecked($req->input('ac', false));
        $balkon = $this->isChecked($req->input('balkon', false));
        $heater = $this->isChecked($req->input('heater', false));
        $bed = $this->isChecked($req->input('bed', false));
        $model = new Kamar;
        $model->kode_kamar = $req->kode_kamar;
        $model->lantai = $req->lantai;
        $model->kamar_mandi_dalam = $dalam;
        $model->isAc = $ac;
        $model->isBalkon = $balkon;
        $model->isWaterHeater = $heater;
        $model->isKingBed = $bed;
        $model->harga = $req->harga;
        $model->save();
        return redirect('/list-kamar');
    }

    function deleteKamar(Request $req)
    {
        $kode = $req->kode;
        $kamar = Kamar::where('kode_kamar', $kode)->first();
        $kamar->delete();
        return redirect('list-kamar');
    }

    function passData(Request $req)
    {
        $kode = $req->kode;
        $kamar = Kamar::where('kode_kamar', $kode)->first();
        return view('pages.kamar.update', compact('kamar'));
    }

    function updateKamar(Request $req)
    {
        $kode = $req->kode;

        $dalam = $this->isChecked($req->input('dalam', false));
        $ac = $this->isChecked($req->input('ac', false));
        $balkon = $this->isChecked($req->input('balkon', false));
        $heater = $this->isChecked($req->input('heater', false));
        $bed = $this->isChecked($req->input('bed', false));

        $kamar = Kamar::where('kode_kamar', $kode)->first();
        if ($kamar) {
            $kamar->lantai = $req->lantai;
            $kamar->kamar_mandi_dalam = $dalam;
            $kamar->kode_kamar = $req->kode;
            $kamar->isAc = $ac;
            $kamar->isBalkon = $balkon;
            $kamar->isWaterHeater = $heater;
            $kamar->isKingBed = $bed;
            $kamar->harga = $req->harga;
            $kamar->save();
        }

        return redirect('/list-kamar');
    }

    public function isChecked($var)
    {
        if ($var) {
            return 1;
        } else {
            return 0;
        }
    }


}