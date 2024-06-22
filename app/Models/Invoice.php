<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'tanggal_deal',
        'periode',
        'jenis',
        'closing',
        'pic',
        'pembayaran',
        'tanda'
    ];
}
