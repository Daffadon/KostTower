<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_Transaksi extends Model
{
    protected $table = 'log_transaksi';
    
    public $timestamp = true;
}
