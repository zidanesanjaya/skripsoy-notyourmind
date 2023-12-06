<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = [
        'id',
        'tingkat',
        'kelas',
        'id_wali_kelas',
        'created_at',
        'updated_at'
    ];
}
