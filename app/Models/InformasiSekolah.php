<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiSekolah extends Model
{
    use HasFactory;
    protected $table = 'informasi_sekolah';
    protected $fillable = [
        'id',
        'nama_sekolah',
        'npsn',
        'nss',
        'alamat_sekolah',
        'kode_pos',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'website',
        'email',
        'nama_kepala',
        'nbm',
        'nip',
        'semester',
        'fase',
        'tahun_pelajaran',
        'tempat_tanggal_rapor',
        'created_at',
        'updated_at'
    ];
}
