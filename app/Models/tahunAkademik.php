<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahunAkademik extends Model
{
    use HasFactory;

    protected $table = 'tahunakademik';

    protected $fillable = [
        'tahunAkademik',
    ];
}