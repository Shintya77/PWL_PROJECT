<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table="petugas";
    protected $primaryKey = "kd_Petugas";

    protected $fillable = [
        'kd_Petugas',
        'Nama',
        'Username',
        'Foto',
        'TanggalLahir',
        'JenisKelamin',
        'Usia',
        'Alamat',
        'Jabatan',
       
    ];
}
