<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pinjaman;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table="pembayaran"; 
    protected $primaryKey = 'Kd_Pembayaran'; 

    protected $fillable = [
        'Kd_Pembayaran',
        'Kd_Pinjaman',
        'NamaNasabah',
        'NamaBarang',
        'TotalBayar',
        'TanggaAkhir',
        'Status',
    ];
    public function pinjaman(){
        return $this->hasOne(Pinjaman::class);
    }


}
