<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = 'driver'; // Nama tabel
        public $timestamps = false; // Nonaktifkan timestamps

    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'no_hp',
        'usia',
        'nik',
        'status',
    ];
}
