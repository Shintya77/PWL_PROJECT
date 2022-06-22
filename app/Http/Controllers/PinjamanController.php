<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Nasabah;
use App\Models\Pinjaman;
use Illuminate\Support\Facades\DB;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pinjaman = Pinjaman::with('barang')->get();

        $pinjaman = Pinjaman::paginate(3); 
        $paginate = Pinjaman::orderBy('Kd_Pinjaman', 'asc')->paginate(3);
        return view('admin.pinjaman.index', [ 'paginate'=>$paginate]);
    }

    
    public function search(Request $request){
        //menangkap data pencarian
        $cari = $request->search;

        //mengambil data dari table pinj$pinjaman sesuai pencarian data
        $pinjaman = Pinjaman::where('Nama','like',"%".$cari."%")->paginate();

        //mengiriim data pinj$pinjaman ke view index
        return view('admin.pinjaman.index', compact('pinjaman'));
    }



    public function create()
    {
        $barang = Barang::all();
        return view('admin.pinjaman.create', ['barang'=>$barang]);
        
    }

  
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
           
            'Id_Nasabah' => 'required',
            'Kd_Barang' => 'required',
            'Pemilik' => 'required',
            'Nama' => 'required',
            'JumlahPinjaman' => 'required',
            'JangkaWaktu' => 'required',
            
        ]);

       
        
        $pinjaman = new Pinjaman;
        
        
        $pinjaman->Id_Nasabah= $request->get('Id_Nasabah');
        $pinjaman->Kd_Barang= $request->get('Kd_Barang');
        $pinjaman->Pemilik= $request->get('Pemilik');
        $pinjaman->Nama = $request->get('Nama');
        $pinjaman->JumlahPinjaman= $request->get('JumlahPinjaman');
        $pinjaman->JangkaWaktu= $request->get('JangkaWaktu');
       
        
        $barang = new Barang;
        $barang->Id_Nasabah = $request->get('Id_Nasabah');
        $barang->Kd_Barang = $request->get('Kd_Barang');
        $barang->Pemilik = $request->get('Pemilik');
        $barang->Nama = $request->get('Nama');


        
        // $pinjaman->nasabah()->associate($nasabah);
        $pinjaman->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pinjaman.index')->with('success', 'Data Barang Berhasil Ditambahkan');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Kd_Pinjaman)
    {
        
        //menampilkan detail data dengan menemukan/berdasarkan kode pinjama$pinjaman
        $pinjaman = Pinjaman::find($Kd_Pinjaman);
         return view('admin.pinjaman.detail', compact('pinjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Kd_Pinjaman)
    {
        
        $pinjaman = Pinjaman::where('Kd_Pinjaman', $Kd_Pinjaman)->first();
        $barang = Barang::all(); 
        return view('admin.pinjaman.edit', compact('pinjaman', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Kd_Pinjaman)
    {
        //melakukan validasi data
        $request->validate([
           
            'Id_Nasabah' => 'required',
            'Kd_Barang' => 'required',
            'Pemilik' => 'required',
            'Nama' => 'required',
            'JumlahPinjaman' => 'required',
            'JangkaWaktu' => 'required',
        ]);

        $pinjaman = Pinjaman::where('Kd_Pinjaman', $Kd_Pinjaman)->first();
       
        $pinjaman->Id_Nasabah = $request->get('Id_Nasabah');
        $pinjaman->Kd_Barang = $request->get('Kd_Barang');
        $pinjaman->Pemilik= $request->get('Pemilik');
        $pinjaman->Nama = $request->get('Nama');
        $pinjaman->JumlahPinjaman= $request->get('JumlahPinjaman');
        $pinjaman->JangkaWaktu= $request->get('JangkaWaktu');
       
        $barang = new Barang;
        $barang->Id_Nasabah = $request->get('Id_Nasabah');
        $barang->Kd_Barang = $request->get('Kd_Barang');
        $barang->Pemilik = $request->get('Pemilik');
        $barang->Nama = $request->get('Nama');

        
        $pinjaman->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('pinjaman.index')->with('success', 'Data Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Kd_Pinjaman)
    {
        //fungsi eloquent untuk menghapus data
        Pinjaman::find($Kd_Pinjaman)->delete();
        return redirect()->route('pinjaman.index')-> with('success', 'Data Barang Berhasil Dihapus');
    }

}
