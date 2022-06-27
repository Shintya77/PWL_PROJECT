<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PDF;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::with('user')->get();
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
        $user = User::all();
        return view('admin.barang.create', ['user'=>$user]);
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
            'Nama' => 'required',
            'Foto' => 'image|file|max:1024',
            'Pemilik' => 'required',
            'TanggalMasuk' => 'required',
            'TanggalKeluar' => 'required',
            'HargaGadai' => 'required|numeric',
            'Status' => 'required',
        ]);

        if ($request->file('Foto')){
            $image_name = $request->file('Foto')->store('Foto', 'public');
        }
        
        $barang = new Barang;
        
        $user = new User;
        $barang->Id_Nasabah= $request->get('Id_Nasabah');
        $barang->Nama = $request->get('Nama');
        $barang->Foto = $image_name;
        $barang->Pemilik= $request->get('Pemilik');
        $barang->TanggalMasuk= $request->get('TanggalMasuk');
        $barang->TanggalKeluar= $request->get('TanggalKeluar');
        $barang->HargaGadai= $request->get('HargaGadai');
        $barang->Status= $request->get('Status');

        $user->id = $request->get('Id_Nasabah');
        $user->name = $request->get('Pemilik');
        
        // $barang->user()->associate($user);
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
        $barang = Barang::with('user')->find($Kd_Barang);
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
        //  $barang = Barang::with('user')->find($Kd_Barang);
        //  return view('admin.barang.edit', compact('barang'));

         $barang = Barang::with('user')->where('Kd_Barang', $Kd_Barang)->first();
         $user = User::all(); 
         return view('admin.barang.edit', compact('barang', 'user'));
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
            'Nama' => 'required',
            'Foto' => 'image|file|max:1024',
            'Pemilik' => 'required',
            'TanggalMasuk' => 'required',
            'TanggalKeluar' => 'required',
            'HargaGadai' => 'required|numeric',
            'Status' => 'required',
        ]);

        $barang = Barang::with('user')->where('Kd_Barang', $Kd_Barang)->first();
        $barang->Id_Nasabah = $request->get('Id_Nasabah');
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

        $user = new User;
        $user->id = $request->get('id');
        $user->name = $request->get('Pemilik');
        // $user->user()->associate($user);
        
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
