<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Mengambil semua isi tabel
        $petugas = Petugas::paginate(3); 
        
        //fungsi eloquent menampilkan data menggunakan pagination
        $posts = Petugas::orderBy('id_Petugas', 'desc')->paginate(3);
        return view('admin.petugas.index', compact('petugas'));
        with('i', (request()->input('page', 1) - 1) * 5);

    }

    
    public function search(Request $request){
        //menangkap data pencarian
        $cari = $request->search;

        //mengambil data dari table petugas sesuai pencarian data
        $petugas = Petugas::where('Nama','like',"%".$cari."%")->paginate();

        //mengiriim data petugas ke view index
        return view('admin.petugas.index', compact('petugas'));
    }


    public function create()
    {
        return view('admin.petugas.create');

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
            'id_Petugas' => 'required',
            'Nama' => 'required',
            'Username' => 'required',
            'TanggalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Usia' => 'required',
            'Alamat' => 'required',
            'Jabatan' => 'required',
        ]);
        
        //fungsi eloquent untuk menambah data
        Petugas::create($request->all());
        
       
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.petugas.index')->with('success', 'Data Petugas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_Petugas)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id petugas
        $petugas = Petugas::find($id_Petugas);
         return view('admin.petugas.detail', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Petugas)
    {
        //menampilkan detail data dengan menemukan berdasarkan id petugas untuk diedit
        $petugas = Petugas::find($id_Petugas);
        return view('admin.petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Petugas)
    {
        //melakukan validasi data
        $request->validate([
            'id_Petugas' => 'required',
            'Nama' => 'required',
            'Username' => 'required',
            'TanggalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Usia' => 'required',
            'Alamat' => 'required',
            'Jabatan' => 'required',
        ]);
       
        //fungsi eloquent untuk mengupdate data inputan kita
        Petugas::find($id_Petugas)->update($request->all());
       
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('admin.petugas.index')->with('success', 'Data Petugas Berhasil Diupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Petugas)
    {
        //fungsi eloquent untuk menghapus data
        Petugas::find($id_Petugas)->delete();
        return redirect()->route('admin.petugas.index')-> with('success', 'Data Petugas Berhasil Dihapus');
    }
}
