<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order'; // Nama tabel
    protected $fillable = [
        'id',
        'nomor_order',
        'nama_pengirim',
        'jenis_muatan',
        'tanggal_muat',
        'berat_muatan',
        'lokasi_muat',
        'tujuan',
        'harga',
        'status_pembayaran',
        'status_order',
        'armada_on_duty'
    ];
}
