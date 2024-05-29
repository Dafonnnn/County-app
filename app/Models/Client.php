<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $table = 'client';

    const CREATE_AT = 'create_at';
    const UPDATED_AT = 'updated_at';

    protected $auditTimestamp = true;

    public $fillable = [
        'id',
        'nama',
        'alamat',
        'no_telp',
        'status',
        'paket',
        'kebutuhan',
        'masa_aktif',
        'nama_pic',
        'telp_pic',
        'alamat_pic'
    ];
}
