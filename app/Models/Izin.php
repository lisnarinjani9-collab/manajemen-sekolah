<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    use HasFactory;

    protected $table = 'izins';

    protected $fillable = [
        'nama_siswa',
        'kelas',
        'tanggal',
        'jenis_izin',
        'alasan'
    ];
}
