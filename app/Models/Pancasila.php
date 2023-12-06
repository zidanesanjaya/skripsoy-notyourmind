<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pancasila extends Model
{
    use HasFactory;
    protected $table = 'pancasila';
    protected $fillable = [
        'id',
        'nama_project',
        'deskripsi',
        'sub_proyek1',
        'sub_proyek2',
        'sub_proyek3',
        'is_active'
    ];
}
