<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potong extends Model
{
    use HasFactory;
    protected $table = 'tb_potong'; // Sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'kode',
        'tgl',
        'bobot',
        'tujuan',
        'keterangan',
    ];

    public function ternak()
    {
        return $this->belongsTo(TbTernak::class, 'kode');
    }
}
