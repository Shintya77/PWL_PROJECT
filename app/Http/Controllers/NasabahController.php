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
         $posts = Nasabah::orderBy('Kd_Nasabah', 'desc')->paginate(3);
         return view('admin.nasabah.index', compact('nasabah'));
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
        return view('admin.nasabah.index', compact('nasabah'));
    }


    public function create()
    {
        return view('admin.nasabah.create');
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
            'Kd_Nasabah' => 'required',
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
        $nasabah->Kd_Nasabah = $request->get('Kd_Nasabah');
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
        return redirect()->route('nasabah.index')->with('success', 'Data Nasabah Berhasil Ditambahkan');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Kd_Nasabah)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Id Nasabah
        $nasabah = Nasabah::find($Kd_Nasabah);
         return view('admin.nasabah.detail', compact('nasabah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Kd_Nasabah)
    {
        //menampilkan detail data dengan menemukan berdasarkan id nasabah untuk diedit
        $nasabah = Nasabah::find($Kd_Nasabah);
        return view('admin.nasabah.edit', compact('nasabah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Kd_Nasabah)
    {
        //melakukan validasi data
        $request->validate([
            'Kd_Nasabah' => 'required',
            'Nama' => 'required',
            'Username' => 'required',
            'Foto' => 'required',
            'TangalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Usia' => 'required',
            'Alamat' => 'required',
            'Pekerjaan' => 'required',
        ]);
        
        //fungsi eloquent untuk mengupdate data inputan kita
        // Nasabah::find($Kd_Nasabah)->update($request->all());

        $nasabah = Nasabah::where('Kd_Nasabah', $Kd_Nasabah)->first();
        $nasabah->Kd_Nasabah = $request->get('Kd_Nasabah');
        $nasabah->Nama = $request->get('Nama');
        $nasabah->Foto = $request->get('Foto');
        $nasabah->TangalLahir= $request->get('TangalLahir');
        $nasabah->JenisKelamin= $request->get('JenisKelamin');
        $nasabah->Usia= $request->get('Usia');
        $nasabah->Alamat= $request->get('Alamat');
        $nasabah->Pekerjaan= $request->get('Pekerjaan');
        
        if ($nasabah->Foto && file_exists(storage_path('app/public/'.$nasabah->Foto))){
            \Storage::delete('public/'. $nasabah->Foto);
        }
        $image_name = $request->file('Foto')->store('Foto', 'public');
        $nasabah->Foto = $image_name;
        $nasabah->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('nasabah.index')->with('success', 'Data Nasabah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Kd_Nasabah)
    {
         //fungsi eloquent untuk menghapus data
         Nasabah::find($Kd_Nasabah)->delete();
         return redirect()->route('nasabah.index')-> with('success', 'Data Nasabah Berhasil Dihapus'); 
    }
}
