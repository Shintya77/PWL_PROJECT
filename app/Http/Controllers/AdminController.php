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
        return view('admin.nasabah.index', 
        ['title'=> 'Data Nasabah Pegadaian']);
    }
    public function barang(){
        return view('admin.barang.index',
        ['title'=> 'Data Barang Pegadaian']);
    }
    public function gudang(){
        return view('admin.gudang.index',
        ['title'=> 'Data Gudang Pegadaian']);
    }
    public function petugas(){
        return view('admin.petugas.index',
        ['title'=> 'Data Petugas Pegadaian']);
    }
    public function pembayaran(){
        return view('admin.pembayaran.index', 
        ['title'=> 'Data Transaksi Pegadaian']);
    }
    public function pinjaman(){
        return view('admin.pinjaman.index', 
        ['title'=> 'Data Pinjaman Pegadaia']);
    }
}
