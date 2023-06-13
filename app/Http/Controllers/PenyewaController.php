<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    function showDetailPenyewa(Request $req)
    {
        $key = $req->id;
        $data = Penyewa::join('log_transaksi', 'log_transaksi.nik', '=', 'penyewa.nik')
            ->join('kamar', 'log_transaksi.kode_kamar', '=', 'kamar.kode_kamar')
            ->where('log_transaksi.nik', $key)->get();
        return view('detail.index', compact('data'));
    }

    function addPenyewa(Request $req)
    {
        $model = new Penyewa;
        $model->nik = $req->NIK;
        $model->nama = $req->nama_lengkap;
        $model->ttl = $req->ttl;
        $model->agama = $req->agama;
        $model->status = $req->status;
        $model->kewarganegaraan = $req->kewarganegaraan;
        $model->pekerjaan = $req->pekerjaan;
        $model->telepon = $req->no_telp;
        $model->alamat = $req->alamat;
        $model->save();

        return view('/penyewa');
    }

    function showPenyewa(Request $req){
        $data = Penyewa::all();
        return view('penyewa.index', compact('data'));
    }


    function deletePenyewa(Request $req)
    {
        $kode = $req->nik;
        $penyewa = Penyewa::where('nik', $kode)->first();

        if ($penyewa) {
            $penyewa->delete();
            return redirect('/penyewa');
        }
    }

    function addPenyewaView(Request $req){
        return view('penyewa.listsewa');
    }

    function passPenyewa(Request $req){
        $nik = $req -> nik;
        $penyewa = Penyewa::where('nik', $nik) -> first();
        return view('penyewa.listsewa', compact('penyewa'));
    }

}