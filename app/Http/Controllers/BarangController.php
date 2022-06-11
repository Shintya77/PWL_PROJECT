<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Nasabah;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua isi tabel
        // $barang = Barang::with('nasabah')->paginate(3); 
        
        // //fungsi eloquent menampilkan data menggunakan pagination
        // $posts = Barang::orderBy('Kd_Barang', 'desc')->paginate(3);
        // return view('admin.barang.index', compact('barang'));
        // with('i', (request()->input('page', 1) - 1) * 5);

        $barang = Barang::with('nasabah')->get();
        $paginate = Barang::orderBy('Kd_Barang', 'asc')->paginate(3);
        return view('admin.barang.index', ['barang' => $barang, 'paginate'=>$paginate]);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request){
        //menangkap data pencarian
        $cari = $request->search;

        //mengambil data dari table barang sesuai pencarian data
        $barang = Barang::where('Nama','like',"%".$cari."%")->paginate();

        //mengiriim data barang ke view index
        return view('admin.barang.index', compact('barang'));
    }

    public function create()
    {
        $nasabah = Nasabah::all();
        return view('admin.barang.create', ['nasabah'=>$nasabah]);
        // return view('admin.barang.create');
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
            'Kd_Nasabah' => 'required',
            'Nama' => 'required',
            'Foto' => 'required',
            'Pemilik' => 'required',
            'TanggalMasuk' => 'required',
            'TanggalKeluar' => 'required',
            'HargaGadai' => 'required',
            'Status' => 'required',
        ]);

        if ($request->file('Foto')){
            $image_name = $request->file('Foto')->store('Foto', 'public');
        }
        
        $barang = new Barang;
        
        $nasabah = new Nasabah;
        $barang->Kd_Barang = $request->get('Kd_Barang');
        $barang->Kd_Nasabah= $request->get('Kd_Nasabah');
        $barang->Nama = $request->get('Nama');
        $barang->Foto = $image_name;
        $barang->Pemilik= $request->get('Pemilik');
        $barang->TanggalMasuk= $request->get('TanggalMasuk');
        $barang->TanggalKeluar= $request->get('TanggalKeluar');
        $barang->HargaGadai= $request->get('HargaGadai');
        $barang->Status= $request->get('Status');

        $nasabah->Kd_Nasabah = $request->get('Kd_Nasabah');
        $nasabah->Nama = $request->get('Pemilik');
        
        // $barang->nasabah()->associate($nasabah);
        $barang->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('barang.index')->with('success', 'Data Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Kd_Barang)
    {
        //menampilkan detail data dengan menemukan/berdasarkan kode barang
        $barang = Barang::with('nasabah')->find($Kd_Barang);
         return view('admin.barang.detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Kd_Barang)
    {
         //menampilkan detail data dengan menemukan berdasarkan kode barang untuk diedit
        //  $barang = Barang::with('nasabah')->find($Kd_Barang);
        //  return view('admin.barang.edit', compact('barang'));

         $barang = Barang::with('nasabah')->where('Kd_Barang', $Kd_Barang)->first();
         $nasabah = Nasabah::all(); 
         return view('admin.barang.edit', compact('barang', 'nasabah'));
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
            'Kd_Nasabah' => 'required',
            'Nama' => 'required',
            'Foto' => 'required',
            'Pemilik' => 'required',
            'TanggalMasuk' => 'required',
            'TanggalKeluar' => 'required',
            'HargaGadai' => 'required',
            'Status' => 'required',
        ]);

        $barang = Barang::with('nasabah')->where('Kd_Barang', $Kd_Barang)->first();
        $barang->Kd_Barang = $request->get('Kd_Barang');
        $barang->Kd_Nasabah = $request->get('Kd_Nasabah');
        $barang->Nama = $request->get('Nama');
        $barang->Foto = $request->get('Foto');
        $barang->Pemilik= $request->get('Pemilik');
        $barang->TanggalMasuk= $request->get('TanggalMasuk');
        $barang->TanggalKeluar= $request->get('TanggalKeluar');
        $barang->HargaGadai= $request->get('HargaGadai');
        $barang->Status= $request->get('Status');
        
        if ($barang->Foto && file_exists(storage_path('app/public/'.$barang->Foto))){
            \Storage::delete('public/'. $barang->Foto);
        }
        $image_name = $request->file('Foto')->store('Foto', 'public');
        $barang->Foto = $image_name;

        $nasabah = new Nasabah;
        $nasabah->Kd_Nasabah = $request->get('Kd_Nasabah');
        $nasabah->Nama = $request->get('Pemilik');
        // $nasabah->nasabah()->associate($nasabah);
        
        $barang->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('barang.index')->with('success', 'Data Barang Berhasil Diupdate');
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
         Barang::find($Kd_Barang)->delete();
         return redirect()->route('barang.index')-> with('success', 'Data Barang Berhasil Dihapus');
    }
}
