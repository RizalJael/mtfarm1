<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbTernak extends Model
{
    use HasFactory;

    protected $table = 'tb_ternaks'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'tgl',
        'jenis',
        'jkel',
        'kode',
        'induk',
        'asal',
        'asal_kedatangan',
        'keterangan',
        'status',
    ];
}
