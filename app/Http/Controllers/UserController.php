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
        return view('user.formgadai', ['title'=> 'Pengajuan']);
    }

    public function contact()
    {
        return view('user.contact', ['title'=> 'Kontak']);
    }

    public function formgadai()
    {
        return view('user.formgadai', ['title'=> 'form pengajuan gadai']);
    }

}
