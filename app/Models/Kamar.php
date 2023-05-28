<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{

    protected $table = 'kamar';
    protected $fillable = ['kode_kamar', 'lantai', 'kamar_mandi_malam', 'isBalkon', 'isAC', 'isWaterHeater', 'isKingBed', 'harga'];
    
    public $timestamp = true;

}