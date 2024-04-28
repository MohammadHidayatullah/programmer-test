<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;
    protected $fillable = [
        'posisi',
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tgl_lahir',
        'jk',
        'kebangsaan',
        'suku',
        'agama',
        'sekolah',
        'jurusan',
        'ipk',
        'alamat',
    ];
}
