<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sumatif extends Model
{
    use HasFactory;
    protected $table = 'sumatif';
    protected $fillable = [
        'id',
        'id_mapel',
        'sumatif',
        'nama_sumatif',
        'high_deskripsi',
        'low_deskripsi',
        'created_at',
        'updated_at'
    ];
}
