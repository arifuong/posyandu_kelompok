<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBayi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'NIK',
        'umur',
        'jeniskelamin',
        'nama_orangtua',
        'berat_badan',
        'tinggi_badan',
        'jenis_imunisasi',
        'lingkar_kepala',
        'riwayat_penyakit',
        'status_penyakit',
        'jenis_asi',
        'lama_menyusui',
        'perkembangan',
        'created_at',
    ];
}
