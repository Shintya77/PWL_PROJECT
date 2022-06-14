<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use App\Models\Barang;
use App\Models\Pinjaman;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dasboard(){
        $jumlah_nasabah = Nasabah::all()->count();
        $jumlah_barang = Barang::all()->count();
        $jumlah_pinjaman = Pinjaman::all()->count();
        $jumlah_pembayaran = Pembayaran::all()->count();
        return view('admin.dasboard', compact('jumlah_nasabah', 'jumlah_barang',
                    'jumlah_pinjaman', 'jumlah_pembayaran')); 
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
        ['title'=> 'Data Pinjaman Pegadaian']);
    }
}
