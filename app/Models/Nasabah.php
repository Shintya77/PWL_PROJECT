<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\Pinjaman;

class Nasabah extends Model
{
    use HasFactory;

    protected $table="nasabah"; 
    protected $primaryKey = 'Kd_Nasabah'; 

    protected $fillable = [
        'Nama',
        'Username',
        'Foto',
        'TangalLahir',
        'JenisKelamin',
        'Usia',
        'Alamat',
        'Pekerjaan',
    ];
    public function barang(){
        return $this->hasOne(Barang::class);
    }

    public function pinjaman(){
        return $this->belongsTo(Pinjaman::class);
    }

}
