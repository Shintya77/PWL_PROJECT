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
            <form method="post" action="{{ route('petugas.update', $petugas->kd_Petugas) }}" enctype="multipart/form-data"  id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="kd_Petugas">Kode_Petugas</label>
                    <input type="text" name="kd_Petugas" class="form-control" id="kd_Petugas" value="{{ $petugas->kd_Petugas }}" aria-describedby="kd_Petugas" > </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $petugas->Nama }}" aria-describedby="Nama" >
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="Username" name="Username" class="form-control" id="Username" value="{{ $petugas->Username }}" aria-describedby="Kelas" >
                    </div>
                    <div class="form-group">
                        <label for="Foto">Foto</label>
                        <input type="file" class="form-control" required="required" name="Foto" value="{{$petugas->Foto}}"><br>
                        <img width="100px" height="100px" src="{{asset('storage/'.$petugas->Foto)}}">
                    </div>
                    <div class="form-group">
                        <label for="TanggalLahir">Tanggal Lahir</label>
                        <input type="TanggalLahir" name="TanggalLahir" class="form-control" id="TanggalLahir" value="{{ $petugas->TanggalLahir}}" aria-describedby="TanggalLahir" >
                    </div>
                    <div class="form-group">
                        <label for="JenisKelamin">Jenis Kelamin</label>
                        <input type="JenisKelamin" name="JenisKelamin" class="form-control" id="JenisKelamin" value="{{ $petugas->JenisKelamin }}" aria-describedby="JenisKelamin" >
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
 

