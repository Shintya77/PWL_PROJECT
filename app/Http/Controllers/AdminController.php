<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dasboard(){
        return view('admin.dasboard');
    }
    public function table(){
        return view('admin.table');
    }
    public function form(){
        return view('admin.form');
    }
    public function icon(){
        return view('admin.icon');
    }
    public function chart(){
        return view('admin.chart');
    }
}
