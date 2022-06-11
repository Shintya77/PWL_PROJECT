<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = Pembayaran::with('pinjaman')->get();
        $paginate = Pembayaran::orderBy('Kd_Pembayaran', 'asc')->paginate(3);
        return view('admin.pembayaran.index', ['pembayaran' => $pembayaran, 'paginate'=>$paginate]);
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
        $pembayaran = Pembayaran::where('Kd_Pembayaran','like',"%".$cari."%")->paginate();

        //mengiriim data barang ke view index
        return view('admin.pembayaran.index', compact('pembayaran'));
    }


    public function create()
    {
        $pinjaman = Pinjaman::all();
        return view('admin.pembayaran.create', ['pinjaman'=>$pinjaman]);
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
            'Kd_Pembayaran' => 'required',
            'Kd_Pinjaman' => 'required',
            'NamaNasabah' => 'required',
            'NamaBarang' => 'required',
            'TotalBayar' => 'required',
            'TanggaAkhir' => 'required',
            'Status' => 'required',
        ]);
        
        $pembayaran = new Pembayaran;
        
        $pinjaman = new Pinjaman;
        $pembayaran->Kd_Pembayaran = $request->get('Kd_Pembayaran');
        $pembayaran->Kd_Pinjaman= $request->get('Kd_Pinjaman');
        $pembayaran->NamaNasabah = $request->get('NamaNasabah');
        $pembayaran->NamaBarang= $request->get('NamaBarang');
        $pembayaran->TotalBayar= $request->get('TotalBayar');
        $pembayaran->TanggaAkhir= $request->get('TanggaAkhir');
        $pembayaran->Status= $request->get('Status');

        $pinjaman->Kd_Pinjaman = $request->get('Kd_Pinjaman');
        $pinjaman->Pemilik = $request->get('NamaNasabah');
        $pinjaman->Nama = $request->get('NamaBarang');
        
        // $barang->nasabah()->associate($nasabah);
        $pembayaran->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pembayaran.index')->with('success', 'Data Pembayaran Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Kd_Pembayaran)
    {
         //menampilkan detail data dengan menemukan/berdasarkan kode Pembayaran
         $pembayaran = Pembayaran::with('pinjaman')->find($Kd_Pembayaran);
         return view('admin.pembayaran.detail', compact('pembayaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Kd_Pembayaran)
    {
        $pembayaran = Pembayaran::with('pinjaman')->where('Kd_Pembayaran', $Kd_Pembayaran)->first();
        $pinjaman = Pinjaman::all(); 
        return view('admin.pembayaran.edit', compact('pembayaran', 'pinjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Kd_Pembayaran)
    {
        //melakukan validasi data
        $request->validate([
            'Kd_Pembayaran' => 'required',
            'Kd_Pinjaman' => 'required',
            'NamaNasabah' => 'required',
            'NamaBarang' => 'required',
            'TotalBayar' => 'required',
            'TanggaAkhir' => 'required',
            'Status' => 'required',
        ]);

        $pembayaran = Pembayaran::with('pinjaman')->where('Kd_Pembayaran', $Kd_Pembayaran)->first();
        $pembayaran->Kd_Pembayaran = $request->get('Kd_Pembayaran');
        $pembayaran->Kd_Pinjaman = $request->get('Kd_Pinjaman');
        $pembayaran->NamaNasabah = $request->get('NamaNasabah');
        $pembayaran->NamaBarang = $request->get('NamaBarang');
        $pembayaran->TotalBayar= $request->get('TotalBayar');
        $pembayaran->TanggaAkhir= $request->get('TanggaAkhir');
        $pembayaran->TanggalKeluar= $request->get('TanggalKeluar');
        $pembayaran->Status= $request->get('Status');

        $pinjaman = new Pinjaman;
        $pinjaman->Kd_Pinjaman = $request->get('Kd_Pinjaman');
        $pinjaman->Pemilik = $request->get('NamaNasabah');
        $pinjaman->Nama = $request->get('NamaBarang');
        $pembayaran->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Kd_Pembayaran)
    {
         //fungsi eloquent untuk menghapus data
         Pembayaran::find($Kd_Pembayaran)->delete();
         return redirect()->route('pembayaran.index')-> with('success', 'Data Pembayaran Berhasil Dihapus');
    }
}
