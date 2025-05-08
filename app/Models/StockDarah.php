<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockDarah extends Model
{
    use HasFactory;
    protected $fillable = ['No', 'KabKota', 'Golda_a', 'Golda_b', 'Golda_ab', 'Golda_o', 'Tgl_Update' ];
}
