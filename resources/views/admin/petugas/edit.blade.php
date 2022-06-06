@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Edit Data Petugas</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                 <strong>Upss!</strong> Ditemukan Beberapa Masalah Dalam Penginputan<br><br>
                 <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('petugas.update', $petugas->id_Petugas) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id_Petugas">id_Petugas</label>
                    <input type="text" name="id_Petugas" class="form-control" id="id_Petugas" value="{{ $petugas->id_Petugas }}" aria-describedby="id_Petugas" > </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $petugas->Nama }}" aria-describedby="Nama" >
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="Username" name="Kelas" class="form-control" id="Kelas" value="{{ $petugas->Username }}" aria-describedby="Kelas" >
                    </div>
                    <div class="form-group">
                        <label for="Tanggal Lahir">Tanggal Lahir</label>
                        <input type="Tanggal Lahir" name="Tanggal Lahir" class="form-control" id="Tanggal Lahir" value="{{ $petugas->TanggalLahir}}" aria-describedby="Tanggal Lahir" >
                    </div>
                    <div class="form-group">
                        <label for="Jenis Kelamin">Jenis Kelamin</label>
                        <input type="Jenis Kelamin" name="Jenis Kelamin" class="form-control" id="Jenis Kelamin" value="{{ $petugas->JenisKelamin }}" aria-describedby="Jenis Kelamin" >
                    </div>
                    <div class="form-group">
                        <label for="Usia">Usia</label>
                        <input type="Usia" name="Usia" class="form-control" id="Usia" value="{{ $petugas->Usia }}" aria-describedby="Usia" >
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="Alamat" name="Alamat" class="form-control" id="Alamat" value="{{ $petugas->Alamat }}" aria-describedby="Alamat" >
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label>
                        <input type="Jabatan" name="Jabatan" class="form-control" id="Jabatan" value="{{ $petugas->Jabatan }}" aria-describedby="Jabatan" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 

