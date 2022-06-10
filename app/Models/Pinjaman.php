<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\Nasabah;


class Pinjaman extends Model
{
    use HasFactory;
    protected $table="pinjaman";
    protected $primaryKey = "Kd_Pinjaman";

    protected $fillable = [
        'Kd_Pinjaman',
        'Kd_Nasabah',
        'Kd_Barang',
        'Pemilik',
        'Nama',
        'JumlahPinjaman',
        'JangkaWaktu',
       
       
    ];

    public function barang(){
        return $this->hasOne(Barang::class);
}

    public function nasabah(){
    return $this->hasOne(Nasabah::class);
}

}
