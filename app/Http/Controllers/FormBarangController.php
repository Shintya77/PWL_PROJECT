<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;

class FormBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.formbarang', ['title'=> 'formbarang']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = $request->validate([
            'Nama' => 'required',
            'Foto' => 'image|file|max:1024',
            'TanggalMasuk' => 'required',
            'TanggalKeluar' => 'required',
            'HargaGadai' => 'required',
            'Status' => 'required',
        ]);
        if($request->file('Foto')){
            $barang['Foto'] = $request->file('Foto')->store('Foto', 'public');
        }
        // $barang['Id_Nasabah']=Auth::user()->id;
        $barang['Id_Nasabah']=auth()->user()->id;
        $barang['Pemilik']=auth()->user()->name;
        Barang::create($barang);
        return redirect('/pengajuan')->with('success', 'Barang Berhasil Diinput!');

        //melakukan validasi data
        // $request->validate([
        //     // 'Kd_Nasabah' => 'required',
        //     'Nama' => 'required',
        //     'Foto' => 'required',
        //     // 'Pemilik' => 'required',
        //     'TanggalMasuk' => 'required',
        //     'TanggalKeluar' => 'required',
        //     'HargaGadai' => 'required',
        //     'Status' => 'required',
        // ]);

        // if ($request->file('Foto')){
        //     $image_name = $request->file('Foto')->store('Foto', 'public');
        // }
        
        // $barang = new Barang;
        
        // // $nasabah = new Nasabah;
        // $barang->Id_Nasabah= $request->get(Auth::user()->id);
        // $barang->Nama = $request->get('Nama');
        // $barang->Foto = $image_name;
        // $barang->Pemilik= $request->get(Auth::user()->Name);
        // $barang->TanggalMasuk= $request->get('TanggalMasuk');
        // $barang->TanggalKeluar= $request->get('TanggalKeluar');
        // $barang->HargaGadai= $request->get('HargaGadai');
        // $barang->Status= $request->get('Status');

        // $nasabah->Kd_Nasabah = $request->get('Kd_Nasabah');
        // $nasabah->Nama = $request->get('Pemilik');
        
        // $barang->nasabah()->associate($nasabah);
        // $barang->save();
        
        // //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return redirect('/pengajuan')->with('success', 'Data Barang Berhasil Ditambahkan');
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
