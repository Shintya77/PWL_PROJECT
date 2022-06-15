<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
class FormPinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.formpinjaman', ['title'=> 'formpinjaman']);
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
           
            // 'Kd_Nasabah' => 'required',
            // 'Kd_Barang' => 'required',
            // 'Pemilik' => 'required',
            // 'Nama' => 'required',
            'JumlahPinjaman' => 'required',
            'JangkaWaktu' => 'required',
            
        ]);

       
        
        $pinjaman = new Pinjaman;
        
        
        // $pinjaman->Kd_Nasabah= $request->get('Kd_Nasabah');
        // $pinjaman->Kd_Barang= $request->get('Kd_Barang');
        // $pinjaman->Pemilik= $request->get('Pemilik');
        // $pinjaman->Nama = $request->get('Nama');
        $pinjaman->JumlahPinjaman= $request->get('JumlahPinjaman');
        $pinjaman->JangkaWaktu= $request->get('JangkaWaktu');
       
        
        // $barang = new Barang;
        // $barang->Kd_Nasabah = $request->get('Kd_Nasabah');
        // $barang->Kd_Barang = $request->get('Kd_Barang');
        // $barang->Pemilik = $request->get('Pemilik');
        // $barang->Nama = $request->get('Nama');


        
        // $pinjaman->nasabah()->associate($nasabah);
        $pinjaman->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('/pengajuan')->with('success', 'Data Pinjaman Berhasil Ditambahkan');
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
