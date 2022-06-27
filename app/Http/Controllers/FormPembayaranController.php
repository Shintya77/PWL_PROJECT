<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pinjaman;
use App\Models\Barang;

class FormPembayaranController extends Controller
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
        $pinjaman = Pinjaman::where('Id_Nasabah', auth()->user()->id)->where('Kd_Barang', $barang->Kd_Barang)->first();
        
        return view('user.pembayaran', [
            'title'=> 'Pembayaran Gadai',
            'barang' => $barang,
            'pinjaman' => $pinjaman,
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
        $pembayaran = $request->validate([
            'Kd_Pinjaman' => 'required',
            'NamaBarang' => 'required',
            'NamaNasabah' => 'required',
            'TotalBayar' => 'required|numeric',
            'TanggaAkhir' => 'required',
            'Status' => 'required',
        ]);
        // $pinjaman['NamaNasabah'] = auth()->user()->name;
        Pembayaran::create($pembayaran);
        return redirect('/pengajuan')->with('success', 'Pembayaran Berhasil Dilakukan!');
        
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
