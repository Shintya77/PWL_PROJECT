<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gudang;
use App\Models\Nasabah;

class Barang extends Model
{
    use HasFactory;
    protected $table="barang"; 
    protected $primaryKey = 'Kd_Barang'; 

    protected $fillable = [
        'Kd_Barang',
        'Kd_Nasabah',
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
    public function nasabah(){
        return $this->belongsTo(Nasabah::class);
}

}
