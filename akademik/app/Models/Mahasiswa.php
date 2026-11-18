<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    use HasFactory;

    // Tambahkan baris ini
    protected $fillable = [
        'nim',
        'nama',
        'prodi',
        'angkatan'
    ];
}
