<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PDF;

class CetakController extends Controller
{
    public function cetak(){
        return view('admin.cetak.cetak', 
        ['title'=> 'Data Nasabah Pegadaian']);
    }
}
