<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl',
        'jenis_laporan', // 'pemasukan' atau 'pengeluaran'
        'jumlah_ternak',
        'detail', // Kolom untuk menyimpan detail tambahan
    ];
}
