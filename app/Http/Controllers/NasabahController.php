<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PDF;

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
         $user = User::paginate(3); 
        
         //fungsi eloquent menampilkan data menggunakan pagination
         $posts = User::orderBy('id', 'desc')->paginate(3);
         return view('admin.nasabah.index', compact('user'));
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

        //mengambil data dari table user sesuai pencarian data
        $user = User::where('Nama','like',"%".$cari."%")->paginate();

        //mengiriim data User ke view index
        return view('admin.nasabah.index', compact('user'));
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
            'Nama' => 'required',
            'Username' => 'required',
            'email' => 'required',
            'password' => 'required',
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
        
        $user = new User;
        $user->name = $request->get('Nama');
        $user->Username= $request->get('Username');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->Foto = $image_name;
        $user->TangalLahir= $request->get('TangalLahir');
        $user->JenisKelamin= $request->get('JenisKelamin');
        $user->Usia= $request->get('Usia');
        $user->Alamat= $request->get('Alamat');
        $user->Pekerjaan= $request->get('Pekerjaan');
        $user->save();
 
        //fungsi eloquent untuk menambah data
        // User::create($request->all());
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('nasabah.index')->with('success', 'Data User Berhasil Ditambahkan');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Id User
        $user = User::find($id);
         return view('admin.nasabah.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id user untuk diedit
        $user = User::find($id);
        return view('admin.nasabah.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'Nama' => 'required',
            'Username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'Foto' => 'required',
            'TangalLahir' => 'required',
            'JenisKelamin' => 'required',
            'Usia' => 'required',
            'Alamat' => 'required',
            'Pekerjaan' => 'required',
        ]);
        
        //fungsi eloquent untuk mengupdate data inputan kita
        // User::find($id)->update($request->all());

        $user = User::where('id', $id)->first();
        $user->name = $request->get('Nama');
        $user->email = $request->get('email');
        $user->Username= $request->get('Username');
        $user->password = $request->get('password');
        $user->Foto = $request->get('Foto');
        $user->TangalLahir= $request->get('TangalLahir');
        $user->JenisKelamin= $request->get('JenisKelamin');
        $user->Usia= $request->get('Usia');
        $user->Alamat= $request->get('Alamat');
        $user->Pekerjaan= $request->get('Pekerjaan');
        
        if ($user->Foto && file_exists(storage_path('app/public/'.$user->Foto))){
            \Storage::delete('public/'. $user->Foto);
        }
        $image_name = $request->file('Foto')->store('Foto', 'public');
        $user->Foto = $image_name;
        $user->save();
        
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('nasabah.index')->with('success', 'Data User Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //fungsi eloquent untuk menghapus data
         User::find($id)->delete();
         return redirect()->route('nasabah.index')-> with('success', 'Data User Berhasil Dihapus'); 
    }
  

}
