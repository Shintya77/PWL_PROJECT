<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table="petugas";
    protected $primaryKey = "id_Petugas";

    protected $fillable = [
        'id_Petugas',
        'Nama',
        'Username',
        'TanggalLahir',
        'JenisKelamin',
        'Usia',
        'Alamat',
        'Jabatan',
       
    ];
}
