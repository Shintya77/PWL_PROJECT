<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.formgadai', ['title'=> 'Pengajuan']);
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
                'Nama' => 'required',
                'Username' => 'required',
                'Foto' => 'required',
                'TangalLahir' => 'required',
                'JenisKelamin' => 'required',
                'Usia' => 'required',
                'Alamat' => 'required',
                'Pekerjaan' => 'required',
            ]);
    
            if ($request->file('Foto')){
                $image_name = $request->file('Foto')->store('Foto', 'public');
            }
            
            $nasabah = new Nasabah;
            $nasabah->Nama = $request->get('Nama');
            $nasabah->Username= $request->get('Username');
            $nasabah->Foto = $image_name;
            $nasabah->TangalLahir= $request->get('TangalLahir');
            $nasabah->JenisKelamin= $request->get('JenisKelamin');
            $nasabah->Usia= $request->get('Usia');
            $nasabah->Alamat= $request->get('Alamat');
            $nasabah->Pekerjaan= $request->get('Pekerjaan');
            $nasabah->save();
     
            //fungsi eloquent untuk menambah data
            // Nasabah::create($request->all());
            
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect('/home')->with('success', 'Data Nasabah Berhasil Ditambahkan');
       
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
