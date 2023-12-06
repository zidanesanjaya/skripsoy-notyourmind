<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKaryawan extends Model
{
    use HasFactory;

    protected $table = 'detail_karyawan';
    protected $fillable = [
        'id',
        'id_user',
        'username_user',
        'nama_lengkap',
        'jabatan',
        'created_at',
        'updated_at'
    ];
}
