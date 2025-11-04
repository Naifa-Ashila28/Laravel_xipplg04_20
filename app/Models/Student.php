<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

     // Tentukan kolom yang boleh diisi (fillable)
    protected $fillable = [
        'nis',
        'nama_lengkap',
        'jenis_kelamin',
        'nisn',
    ];
}
