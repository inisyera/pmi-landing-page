<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDonorDarah extends Model
{
    use HasFactory;
    protected $fillable = ['No', 'Lokasi', 'Alamat','Jam_Mulai','Jam_Selesai','Peruntukan'];
}
