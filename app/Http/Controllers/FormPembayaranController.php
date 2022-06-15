<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pinjaman;

class FormPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.pembayaran', ['title'=> 'Pengajuan']);
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
        //melakukan validasi data
        $request->validate([
            'Kd_Pinjaman' => 'required',
            'NamaNasabah' => 'required',
            'NamaBarang' => 'required',
            'TotalBayar' => 'required',
            'TanggaAkhir' => 'required',
            'Status' => 'required',
        ]);
        
        $pembayaran = new Pembayaran;
        
        $pinjaman = new Pinjaman;
        $pembayaran->Kd_Pinjaman= $request->get('Kd_Pinjaman');
        $pembayaran->NamaNasabah = $request->get('NamaNasabah');
        $pembayaran->NamaBarang= $request->get('NamaBarang');
        $pembayaran->TotalBayar= $request->get('TotalBayar');
        $pembayaran->TanggaAkhir= $request->get('TanggaAkhir');
        $pembayaran->Status= $request->get('Status');

        $pinjaman->Kd_Pinjaman = $request->get('Kd_Pinjaman');
        $pinjaman->Pemilik = $request->get('NamaNasabah');
        $pinjaman->Nama = $request->get('NamaBarang');
        
        // $barang->nasabah()->associate($nasabah);
        $pembayaran->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/pengajuan')->with('success', 'Data Pembayaran Berhasil Ditambahkan');
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
