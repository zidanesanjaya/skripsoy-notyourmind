<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;
    protected $table = 'mata_pelajaran';
    protected $fillable = [
        'id',
        'nama_mapel',
        'kkm',
        'id_guru',
        'semester',
        'id_tahun_akademik'
    ];
}
