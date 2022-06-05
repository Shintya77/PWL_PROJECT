<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nasabah;
use Illuminate\Support\Facades\DB;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Mengambil semua isi tabel
         $nasabah = Nasabah::paginate(3); 
        
         //fungsi eloquent menampilkan data menggunakan pagination
         $posts = Nasabah::orderBy('Id_Nasabah', 'desc')->paginate(3);
         return view('nasabah.index', compact('nasabah'));
         with('i', (request()->input('page', 1) - 1) * 5);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){
        //menangkap data pencarian
        $cari = $request->search;

        //mengambil data dari table nasabah sesuai pencarian data
        $nasabah = Nasabah::where('Nama','like',"%".$cari."%")->paginate();

        //mengiriim data Nasabah ke view index
        return view('nasabah.index', compact('nasabah'));
    }


    public function create()
    {
        return view('nasabah.create');
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
            'Id_Nasabah' => 'required',
            'Nama' => 'required',
            'Username' => 'required',
            'TangalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Usia' => 'required',
            'Alamat' => 'required',
            'Pekerjaan' => 'required',
        ]);
        
        //fungsi eloquent untuk menambah data
        Nasabah::create($request->all());
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('nasabah.index')->with('success', 'Data Nasabah Berhasil Ditambahkan');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_Nasabah)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Id Nasabah
        $nasabah = Nasabah::find($Id_Nasabah);
         return view('nasabah.detail', compact('nasabah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Nasabah)
    {
        //menampilkan detail data dengan menemukan berdasarkan id nasabah untuk diedit
        $nasabah = Nasabah::find($Id_Nasabah);
        return view('nasabah.edit', compact('nasabah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Nasabah)
    {
        //melakukan validasi data
        $request->validate([
            'Id_Nasabah' => 'required',
            'Nama' => 'required',
            'Username' => 'required',
            'TangalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Usia' => 'required',
            'Alamat' => 'required',
            'Pekerjaan' => 'required',
        ]);
        
        //fungsi eloquent untuk mengupdate data inputan kita
        Nasabah::find($Id_Nasabah)->update($request->all());
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('nasabah.index')->with('success', 'Data Nasabah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Nasabah)
    {
         //fungsi eloquent untuk menghapus data
         Nasabah::find($Id_Nasabah)->delete();
         return redirect()->route('nasabah.index')-> with('success', 'Data Nasabah Berhasil Dihapus'); 
    }
}
