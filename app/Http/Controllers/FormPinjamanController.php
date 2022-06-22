<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use App\Models\Barang;
class FormPinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $barang1=Barang::where('Id_Nasabah', auth()->user()->Id_Nasabah)->where('Status', 'gadai')->get();
        $barang = Barang::where('Id_Nasabah', auth()->user()->id)->where('Status', 'gadai')->first();
        
        return view('user.formpinjaman', [
            'title'=> 'formpinjaman',
            'barang' => $barang,
        ]);
     
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pinjaman = $request->validate([
            'Kd_Barang' => 'required',
            'Nama' => 'required',
            'JumlahPinjaman' => 'required',
            'JangkaWaktu' => 'required',
        ]);

        // $barang['Id_Nasabah']=Auth::user()->id;
        $pinjaman['Id_Nasabah'] = auth()->user()->id;
        $pinjaman['Pemilik'] = auth()->user()->name;
        Pinjaman::create($pinjaman);
        return redirect('/pengajuan')->with('success', 'Barang Berhasil Diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
