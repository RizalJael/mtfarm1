<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mortal extends Model
{
    use HasFactory;
    protected $table = 'tb_mortals'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'kode',
        'tgl',
        'penyebab',
    ];
}
