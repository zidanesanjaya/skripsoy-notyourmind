<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiPancasila extends Model
{
    use HasFactory;
    protected $table = 'nilai_pancasila';
    protected $fillable = [
        'id',
        'nisn',
        'id_pancasila',
        'desc_pancasila1',
        'desc_pancasila2',
        'desc_pancasila3',
        'nilai_pancasila1',
        'nilai_pancasila2',
        'nilai_pancasila3',
        'catatan',
        'step',
        'id_tahun_akademik',
        'semester',
        'created_at',
        'updated_at',
    ];
}
