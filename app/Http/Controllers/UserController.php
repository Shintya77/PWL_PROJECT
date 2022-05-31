<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home', ['title'=> 'home']);
    }

    public function about()
    {
        return view('user.about', ['title'=> 'about']);
    }

    public function service()
    {
        return view('user.service', ['title'=> 'service']);
    }

    public function blog()
    {
        return view('user.blog', ['title'=> 'blog']);
    }

    public function contact()
    {
        return view('user.contact', ['title'=> 'contact']);
    }
}
