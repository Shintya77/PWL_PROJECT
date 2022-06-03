<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return view('admin.dasboard', 
            ['title'=> 'Dasboard Admin Pegadaian',
             'admin'=>'AHMAD SIWON']);   
        }
        else
        {
            return view('user.home', ['title'=> 'Beranda']);
        }
       
    }
}
