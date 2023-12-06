<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    use HasFactory;
    protected $table = 'ekstrakulikuler';
    protected $fillable = [
        'id',
        'nisn',
        'id_tahun_akademik',
        'semester',
        'ekstrakulikuler1',
        'ekstrakulikuler2',
        'ekstrakulikuler3',
        'ekstrakulikuler4',
        'ekstrakulikuler5',
        'nilai_ekstra1',
        'nilai_ekstra2',
        'nilai_ekstra3',
        'nilai_ekstra4',
        'nilai_ekstra5',
        'created_at',
        'updated_at'
    ];
}
