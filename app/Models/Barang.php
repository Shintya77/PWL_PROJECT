<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gudang;
use App\Models\User;
use App\Models\Pinjaman;

class Barang extends Model
{
    use HasFactory;
    protected $table="barang"; 
    protected $primaryKey = 'Kd_Barang'; 

    protected $fillable = [
        'Id_Nasabah',
        'Nama',
        'Foto',
        'Pemilik',
        'TanggalMasuk',
        'TanggalKeluar',
        'HargaGadai',
        'Status',
    ];
    public function gudang(){
        return $this->belongsTo(Gudang::class);
}
public function user(){
    return $this->belongsTo(User::class);
}

public function pinjaman(){
    return $this->belongsTo(Pinjaman::class);
}
}
