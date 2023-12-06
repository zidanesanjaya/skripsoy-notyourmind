<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelKelas extends Model
{
    use HasFactory;
    protected $table = 'mapel_kelas';
    protected $fillable = [
        'id',
        'id_mapel',
        'id_kelas',
    ];

}
