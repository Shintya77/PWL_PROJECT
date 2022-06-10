<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gudang;

class Barang extends Model
{
    use HasFactory;
    protected $table="barang"; 
    protected $primaryKey = 'Kd_Barang'; 

    protected $fillable = [
        'Kd_Barang',
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
}
