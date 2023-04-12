<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai_mahasiswa';

    protected $fillable = [
        'nama',
        'nim',
        'Proyek',
        'Manajemen Proyek',
        'Jaringan Komputer',
        'Kewarganegaraan',
        'PWL',
        'Praktikum Jarkom',
        'Statkom',
        'Business Intellegence',
        'ADBO',
    ];
}
