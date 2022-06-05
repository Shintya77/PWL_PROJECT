<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $table="nasabah"; 
    protected $primaryKey = 'Id_Nasabah'; 

    protected $fillable = [
        'Id_Nasabah',
        'Nama',
        'Username',
        'TanggalLahir',
        'JenisKelamin',
        'Usia',
        'Alamat',
        'Pekerjaan',
    ];

}
