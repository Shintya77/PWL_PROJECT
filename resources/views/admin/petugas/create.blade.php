@extends('layouts.admin.master')
 
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Data Petugas</div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Upss!</strong> Ditemukan Beberapa Masalah dalam Penginputan<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('petugas.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="id_Petugas">id_Petugas</label>
                        <input type="text" name="id_Petugas" class="form-control" id="id_Petugas" aria-describedby="id_Petugas" >
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" >
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="Username" name="Username" class="form-control" id="Username" aria-describedby="Username" >
                    </div>

                    <div class="form-group">
                            <label for="Tanggallahir">Tanggal Lahir</label>
                            <input type="date" name="TanggalLahir" class="form-control" id="TanggalLahir" aria-describedby="TanggalLahir">
                        </div>
                   
                    <div class="form-group">
                        <label for="JenisKelamin">Jenis Kelamin</label>
                        <input type="JenisKelamin" name="JenisKelamin" class="form-control" id="JenisKelamin" aria-describedby="JenisKelamin" >
                    </div>
                    <div class="form-group">
                        <label for="Usia">Usia</label>
                        <input type="Usia" name="Usia" class="form-control" id="Usia" aria-describedby="Usia" >
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="Alamat" name="Alamat" class="form-control" id="Alamat" aria-describedby="Alamat" >
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label>
                        <input type="Jabatan" name="Jabatan" class="form-control" id="Jabatan" aria-describedby="Jabatan" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection

