<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIbu extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'nama',
        'tanggal_lahir',
        'alamat',
        'NIK',
        'Usia_kehamilan',
        'jumlah_kehamilan',
        'riwayat_persalinan_sebelumnya',
        'kesehatan_janin',
        'riwayat_penyakit',
        'vitamin',
        'imunisasi',
        'tanggal_melahirkan',
        'created_at',
        'updated_at'
    ];
}
