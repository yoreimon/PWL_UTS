<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nip',
        'nama',
        'email',
        'jabatan',
        'alamat',
        'hp',
        'tanggal_masuk',
    ];
}