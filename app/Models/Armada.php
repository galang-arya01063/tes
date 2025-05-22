<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $table = 'armada'; // Nama tabel

    public $timestamps = false; // Nonaktifkan timestamps

    protected $fillable = [
        'id',
        'nopol',
        'jenis_mobil',
        'merek_mobil',
        'tahun_pembelian',
        'kapasitas',
        'driver_id',
        'status_armada',
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id', 'id');
    }
}
