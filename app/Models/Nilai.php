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
        'Manajemen_Proyek',
        'Jaringan_Komputer',
        'Kewarganegaraan',
        'PWL',
        'Praktikum_Jarkom',
        'Statkom',
        'Business_Intellegence',
        'ADBO',
    ];
}
