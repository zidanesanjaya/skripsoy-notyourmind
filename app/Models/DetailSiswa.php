<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSiswa extends Model
{
    use HasFactory;
    protected $table = 'detail_siswa';
    protected $primaryKey = 'nisn';
    protected $fillable = [
        'nisn',
        'id_kelas',
        'user_id',
        'nama_lengkap',
        'tempat',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'status',
        'anak_ke',
        'alamat_siswa',
        'no_hp',
        'sekolah_asal',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'alamat_ortu',
        'no_hp_ortu',
        'nama_wali',
        'no_hp_wali',
        'alamat_wali',
        'pekerjaan_wali',
        'created_at',
        'updated_at'
    ];
}
