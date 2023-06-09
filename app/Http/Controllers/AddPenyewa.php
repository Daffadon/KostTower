<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class AddPenyewa extends Controller
{
    function addPenyewa(Request $req) {
        $model= new Penyewa;
        $model->nik= $req->NIK;
        $model->nama= $req->nama_lengkap;
        $model->ttl= $req->ttl;
        $model->agama= $req->agama;
        $model->status= $req->status;
        $model->kewarganegaraan= $req->kewarganegaraan;
        $model->pekerjaan= $req->pekerjaan;
        $model->telepon= $req->no_telp;
        $model->address= $req->alamat;
        $model->timestamps= now();
        $model->save();
        return redirect('/new-penyewa');
    }
}
