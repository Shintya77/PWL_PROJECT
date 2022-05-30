<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dasboard(){
        return view('admin.dasboard', 
        ['title'=> 'Dasboard Admin Pegadaian',
         'admin'=>'AHMAD SIWON']);
    }
   
    public function nasabah(){
        return view('admin.nasabah', 
        ['title'=> 'Data Nasabah Pegadaian',
        'admin'=>'AHMAD SIWON']);
    }
    public function barang(){
        return view('admin.barang',
        ['title'=> 'Data Barang Pegadaian',
         'admin'=>'AHMAD SIWON']);
    }
    public function petugas(){
        return view('admin.petugas',
        ['title'=> 'Data Petugas Pegadaian',
        'admin'=>'AHMAD SIWON']);
    }
    public function transaksi(){
        return view('admin.transaksi', 
        ['title'=> 'Data Transaksi Pegadaian',
        'admin'=>'AHMAD SIWON']);
    }
}
