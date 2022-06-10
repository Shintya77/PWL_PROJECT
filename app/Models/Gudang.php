<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Gudang extends Model
{
    use HasFactory;
    protected $table="gudang";
    protected $primaryKey = "Kd_Barang";

    protected $fillable = [
        'Kd_Barang',
        'Nama',
        'Pemilik',
        'Deskripsi',
        'Kondisi',
        'Foto',
       
       
    ];

    public function barang(){
        return $this->hasMany(Barang::class);
}

}