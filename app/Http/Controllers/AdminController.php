<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dasboard(){
        return view('admin.dasboard', 
        ['title'=> 'Dasboard Admin Pegadaian']);
    }
   
    public function nasabah(){
        return view('admin.nasabah', 
        ['title'=> 'Data Nasabah Pegadaia']);
    }
    public function barang(){
        return view('admin.barang',
        ['title'=> 'Data Barang Pegadaian']);
    }
    public function gudang(){
        return view('admin.gudang',
        ['title'=> 'Data Gudang Pegadaian']);
    }
    public function petugas(){
        return view('admin.petugas',
        ['title'=> 'Data Petugas Pegadaia']);
    }
    public function pembayaran(){
        return view('admin.pembayaran', 
        ['title'=> 'Data Transaksi Pegadaia']);
    }
    public function pinjaman(){
        return view('admin.pinjaman', 
        ['title'=> 'Data Pinjaman Pegadaia']);
    }
}
