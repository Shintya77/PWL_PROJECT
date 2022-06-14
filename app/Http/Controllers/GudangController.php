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
        //  $gudang = Gudang::with('barang')->paginate(3); 
        $gudang = Gudang::paginate(3); 
        

        //  $gudang = Gudang::with('barang')->get();
         $paginate = Gudang::orderBy('Kd_Barang', 'asc')->paginate(3);
         return view('admin.gudang.index', [ 'paginate'=>$paginate]);
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
            'Kd_Barang' => 'required',
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
        $barang = new Barang;
        $gudang->Kd_Barang = $request->get('Kd_Barang');
        $gudang->Nama = $request->get('Nama');
        $gudang->Pemilik= $request->get('Pemilik');
        $gudang->Deskripsi= $request->get('Deskripsi');
        $gudang->Kondisi= $request->get('Kondisi');
        $gudang->Foto = $image_name;

       
        $barang->Kd_Barang = $request->get('Kd_Barang');
        $barang->Nama = $request->get('Pemilik');
        
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
    public function show($Kd_Barang)
    {
         //menampilkan detail data dengan menemukan/berdasarkan id gudan$gudang
         $gudang = Gudang::find($Kd_Barang);
         return view('admin.gudang.detail', compact('gudang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Kd_Barang)
    {
        //menampilkan detail data dengan menemukan berdasarkan id gudan$gudang untuk diedit
        // $gudang = Gudang::find($Kd_Barang);
        // return view('admin.gudang.edit', compact('gudang'));


        $gudang = Gudang::where('Kd_Barang', $Kd_Barang)->first();
        $barang = Barang::all(); 
        return view('admin.gudang.edit', compact('gudang', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Kd_Barang)
    {
        //melakukan validasi data
        $request->validate([
            'Kd_Barang' => 'required',
            'Nama' => 'required',
            'Pemilik' => 'required',
            'Deskripsi' => 'required',
            'Kondisi' => 'required',
            'Foto' => 'required',
        ]);

    
        //fungsi eloquent untuk mengupdate data inputan kita




        $gudang = Gudang::where('Kd_Barang', $Kd_Barang)->first();
        $gudang->Kd_Barang = $request->get('Kd_Barang');
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
        

        $Barang = new Barang;
        $Barang->Kd_Barang = $request->get('Kd_Barang');
        $Barang->Nama = $request->get('Pemilik');
       
        
        $gudang->save();
        
       
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('gudang.index')->with('success', 'Data Petugas Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Kd_Barang)
    {
         //fungsi eloquent untuk menghapus data
         Gudang::find($Kd_Barang)->delete();
         return redirect()->route('gudang.index')-> with('success', 'Data Petugas Berhasil Dihapus');
    }
}
