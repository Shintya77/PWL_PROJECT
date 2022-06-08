<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Mengambil semua isi tabel
         $gudang = Gudang::with('barang')->paginate(3); 
        

         //fungsi eloquent menampilkan data menggunakan pagination
         $posts = Gudang::orderBy('kd_Barang', 'desc')->paginate(3);
         return view('admin.gudang.index', compact('gudang'));
         with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function search(Request $request){
        //menangkap data pencarian
        $cari = $request->search;

        //mengambil data dari table gud$gudang sesuai pencarian data
        $gudang = Gudang::where('Nama','like',"%".$cari."%")->paginate();

        //mengiriim data gud$gudang ke view index
        return view('admin.gudang.index', compact('gudang'));
    }


    public function create()
    {

       

        $barang = Barang::all();
        return view('admin.gudang.create', ['barang'=>$barang]);

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
            'kd_Barang' => 'required',
            'Nama' => 'required',
            'Pemilik' => 'required',
            'Deskripsi' => 'required',
            'Kondisi' => 'required',
            'Foto' => 'required',
            
        ]);

        if ($request->file('Foto')){
            $image_name = $request->file('Foto')->store('Foto', 'public');
        }
        
        $gudang = new Gudang;
        $gudang->kd_Barang = $request->get('kd_Barang');
        $gudang->Nama = $request->get('Nama');
        $gudang->Pemilik= $request->get('Pemilik');
        $gudang->Deskripsi= $request->get('Deskripsi');
        $gudang->Kondisi= $request->get('Kondisi');
        $gudang->Foto = $image_name;
        $gudang->save();
   
       
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('gudang.index')->with('success', 'Data Petugas Berhasil Ditambahkan');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kd_Barang)
    {
         //menampilkan detail data dengan menemukan/berdasarkan id gudan$gudang
         $gudang = Gudang::find($kd_Barang);
         return view('admin.gudang.detail', compact('gudang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kd_Barang)
    {
        //menampilkan detail data dengan menemukan berdasarkan id gudan$gudang untuk diedit
        $gudang = Gudang::find($kd_Barang);
        return view('admin.gudang.edit', compact('gudang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kd_Barang)
    {
        //melakukan validasi data
        $request->validate([
            'kd_Barang' => 'required',
            'Nama' => 'required',
            'Pemilik' => 'required',
            'Deskripsi' => 'required',
            'Kondisi' => 'required',
            'Foto' => 'required',
        ]);

    
        //fungsi eloquent untuk mengupdate data inputan kita




        $gudang = Gudang::where('kd_Barang', $kd_Barang)->first();
        $gudang->kd_Barang = $request->get('kd_Barang');
        $gudang->Nama = $request->get('Nama');
        $gudang->Pemilik= $request->get('Pemilik');
        $gudang->Deskripsi= $request->get('Deskripsi');
        $gudang->Kondisi= $request->get('Kondisi');
        $gudang->Foto = $request->get('Foto');
        


        if ($gudang->Foto && file_exists(storage_path('app/public/'.$gudang->Foto))){
            \Storage::delete('public/'. $gudang->Foto);
        }
        $image_name = $request->file('Foto')->store('Foto', 'public');
        $gudang->Foto = $image_name;
        
        $gudang->save();
        // Petugas::find($kd_Petugas)->update($request->all());


       
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('gudang.index')->with('success', 'Data Petugas Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kd_Barang)
    {
         //fungsi eloquent untuk menghapus data
         Gudang::find($kd_Barang)->delete();
         return redirect()->route('gudang.index')-> with('success', 'Data Petugas Berhasil Dihapus');
    }
}
