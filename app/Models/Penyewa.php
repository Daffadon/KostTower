<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewa';
    protected $fillable = ['nik', 'nama', 'ttl', 'alamat', 'agama', 'status', 'pekerjaan', 'kewarganegaraan', 'telepon'];
}