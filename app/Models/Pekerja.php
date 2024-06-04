<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_pekerja',
        'no_telp_pekeja',
        'status',
        'alamat_pekerja',
        'id_invoice',
        'tugas',
        'deadline',
        'tugas_selesai'
    ];
}
