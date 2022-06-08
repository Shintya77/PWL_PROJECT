<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $table="nasabah"; 
    protected $primaryKey = 'Kd_Nasabah'; 

    protected $fillable = [
        'Kd_Nasabah',
        'Nama',
        'Username',
        'Foto',
        'TangalLahir',
        'JenisKelamin',
        'Usia',
        'Alamat',
        'Pekerjaan',
    ];

}
