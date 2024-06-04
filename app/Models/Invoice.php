<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public $table = 'invoice';

    const CREATE_AT = 'create_at';
    const UPDATED_AT = 'updated_at';

    protected $auditTimestamp = true;

    public $fillable = [
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
