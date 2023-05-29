<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_Transaksi extends Model
{
    protected $table = 'log_transaksi';
    protected $fillable = ['kode_kamar', 'nik', 'tanggal_masuk', 'tanggal_keluar'];

    public $timestamp = true;
}