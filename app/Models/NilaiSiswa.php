<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSiswa extends Model
{
    use HasFactory;
    protected $table = 'nilai_siswa';
    protected $fillable = [
        'id',
        'nisn',
        'id_sumatif',
        'id_mapel_kelas',
        'nilai',
        'id_sumatif_tertinggi',
        'id_sumatif_terendah'
    ];
}
