<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultsSumatif extends Model
{
    use HasFactory;
    protected $table = 'results_sumatif';
    protected $fillable = [
        'id',
        'id_mapel',
        'id_detail_siswa',
        'alpha',
        'ijin',
        'sakit',
        'id_sumatif_max',
        'id_sumatif_min',
        'created_at',
        'updated_at'
    ];
}
