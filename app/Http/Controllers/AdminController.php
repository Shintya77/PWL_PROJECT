<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dasboard(){
        return view('admin.dasboard');
    }
   
    public function form(){
        return view('admin.nasabah');
    }
    public function table(){
        return view('admin.barang');
    }
    public function icon(){
        return view('admin.petugas');
    }
    public function chart(){
        return view('admin.transaksi');
    }
}
