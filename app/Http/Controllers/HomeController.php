<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Barang;
use App\Models\Pinjaman;
use App\Models\Pembayaran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='1')
        {
            $jumlah_nasabah = User::all()->count();
            $jumlah_barang = Barang::all()->count();
            $jumlah_pinjaman = Pinjaman::all()->count();
            $jumlah_pembayaran = Pembayaran::all()->count();
            return view('admin.dasboard', compact('jumlah_nasabah', 'jumlah_barang',
                        'jumlah_pinjaman', 'jumlah_pembayaran'));  
        }
        else
        {
            return view('user.home', ['title'=> 'Beranda']);
        }
       
    }
}
