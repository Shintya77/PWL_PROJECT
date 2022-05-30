<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dasboard(){
        return view('admin.dasboard');
    }
   
    public function nasabah(){
        return view('admin.nasabah');
    }
    public function barang(){
        return view('admin.barang');
    }
    public function petugas(){
        return view('admin.petugas');
    }
    public function transaksi(){
        return view('admin.transaksi');
    }
}
