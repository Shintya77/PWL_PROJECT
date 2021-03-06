<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\User;
use App\Models\Pembayaran;


class Pinjaman extends Model
{
    use HasFactory;
    protected $table="pinjaman";
    protected $primaryKey = "Kd_Pinjaman";

    protected $fillable = [
        'Id_Nasabah',
        'Kd_Barang',
        'Pemilik',
        'Nama',
        'JumlahPinjaman',
        'JangkaWaktu',   
    ];

    public function barang(){
        return $this->hasOne(Barang::class);
}

    
public function pembayaran(){
    return $this->belongsTo(Pembayaran::class);
}

public function user(){
    return $this->belongsTo(User::class);
}
}
