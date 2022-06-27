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
        $posts = Petugas::orderBy('kd_Petugas', 'desc')->paginate(3);
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
            'kd_Petugas' => 'required',
            'Nama' => 'required',
            'Username' => 'required',
            'Foto' => 'image|file|max:1024',
            'TanggalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Usia' => 'required|numeric',
            'Alamat' => 'required',
            'Jabatan' => 'required',
        ]);

       
        
        
        if ($request->file('Foto')){
            $image_name = $request->file('Foto')->store('Foto', 'public');
        }
        
        $petugas = new Petugas;
        $petugas->kd_Petugas = $request->get('kd_Petugas');
        $petugas->Nama = $request->get('Nama');
        $petugas->Username= $request->get('Username');
        $petugas->Foto = $image_name;
        $petugas->TanggalLahir= $request->get('TanggalLahir');
        $petugas->JenisKelamin= $request->get('JenisKelamin');
        $petugas->Usia= $request->get('Usia');
        $petugas->Alamat= $request->get('Alamat');
        $petugas->Jabatan= $request->get('Jabatan');
        $petugas->save();
   
       
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('petugas.index')->with('success', 'Data Petugas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kd_Petugas)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id petugas
        $petugas = Petugas::find($kd_Petugas);
         return view('admin.petugas.detail', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_Petugas)
    {
        //menampilkan detail data dengan menemukan berdasarkan id petugas untuk diedit
        $petugas = Petugas::find($kd_Petugas);
        return view('admin.petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kd_Petugas)
    {
        //melakukan validasi data
        $request->validate([
            'kd_Petugas' => 'required',
            'Nama' => 'required',
            'Username' => 'required',
            'Foto' => 'image|file|max:1024',
            'TanggalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Usia' => 'required|numeric',
            'Alamat' => 'required',
            'Jabatan' => 'required',
        ]);

    
        //fungsi eloquent untuk mengupdate data inputan kita

        $petugas = Petugas::where('kd_Petugas', $kd_Petugas)->first();
        $petugas->kd_Petugas = $request->get('kd_Petugas');
        $petugas->Nama = $request->get('Nama');
        $petugas->Foto = $request->get('Foto');
        $petugas->TanggalLahir= $request->get('TanggalLahir');
        $petugas->JenisKelamin= $request->get('JenisKelamin');
        $petugas->Usia= $request->get('Usia');
        $petugas->Alamat= $request->get('Alamat');
        $petugas->Jabatan= $request->get('Jabatan');


        if ($petugas->Foto && file_exists(storage_path('app/public/'.$petugas->Foto))){
            \Storage::delete('public/'. $petugas->Foto);
        }
        $image_name = $request->file('Foto')->store('Foto', 'public');
        $petugas->Foto = $image_name;
        
        $petugas->save();
        // Petugas::find($kd_Petugas)->update($request->all());


       
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('petugas.index')->with('success', 'Data Petugas Berhasil Diupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_Petugas)
    {
        //fungsi eloquent untuk menghapus data
        Petugas::find($kd_Petugas)->delete();
        return redirect()->route('petugas.index')-> with('success', 'Data Petugas Berhasil Dihapus');


       
    }
}
