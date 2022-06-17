<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.isiDataDiri', ['title'=> 'Pengajuan']);
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
        return view('user.isiDataDiri', ['title'=> 'Pengajuan', 'user'=>User::find($id)]);
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
        //melakukan validasi data
        // $request->validate([
        //     'Nama' => 'required',
        //     'Username' => 'required',
        //     'Foto' => 'required',
        //     'TangalLahir' => 'required',
        //     'JenisKelamin' => 'required',
        //     'Usia' => 'required',
        //     'Alamat' => 'required',
        //     'Pekerjaan' => 'required',
        // ]);

        // if ($request->file('Foto')){
        //     $image_name = $request->file('Foto')->store('Foto', 'public');
        // }
        
        // $nasabah = new User;
        // $nasabah->Nama = $request->get('Nama');
        // $nasabah->Username= $request->get('Username');
        // $nasabah->Foto = $image_name;
        // $nasabah->TangalLahir= $request->get('TangalLahir');
        // $nasabah->JenisKelamin= $request->get('JenisKelamin');
        // $nasabah->Usia= $request->get('Usia');
        // $nasabah->Alamat= $request->get('Alamat');
        // $nasabah->Pekerjaan= $request->get('Pekerjaan');
        // $nasabah->();
 
        //fungsi eloquent untuk menambah data
        // Nasabah::create($request->all());
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        // return redirect('/pengajuan')->with('success', 'Data Nasabah Berhasil Ditambahkan');

        $validateData = $request->validate([
            'Username' => 'required',
            'TangalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Usia' => 'required',
            'Alamat' => 'required',
            'Pekerjaan' => 'required',
            'Foto' => 'image|file|max:1024'
        ]);
        if($request->file('Foto')){
            $validateData['Foto'] = $request->file('Foto')->store('Foto', 'public');
        }
        User::where('id', $id)->update($validateData);
        return redirect('/pengajuan')->with('success', 'Data berhasil diubah');
   
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
