<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function home()
    {
        return view('user.home', ['title'=> 'Beranda']);
       
    }

    public function about()
    {
        return view('user.about', ['title'=> 'Tentang Kami']);
    }

    public function service()
    {
        return view('user.service', ['title'=> 'Layanan']);
    }

    public function pengajuan()
    {
        return view('user.pengajuan', ['title'=> 'Pengajuan']);
    }

    public function contact()
    {
        return view('user.contact', ['title'=> 'Kontak']);
    }

    public function formbarang()
    {
        return view('user.formbarang', ['title'=> 'formbarang']);
    }
    public function formpinjaman()
    {
        return view('user.formpinjaman', ['title'=> 'formpinjaman']);
    }
    public function formpembayaran()
    {
        return view('user.formpembayaran', ['title'=> 'form Pembayaran']);
    }

}
