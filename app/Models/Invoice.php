<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama_client",
        "tanggal_deal",
        "periode_paket",
        "jenis_paket",
        "closing_bill",
        "pic_laporan",
        "pembayaran",
        "tanda_selesai"
    ];
}
