@extends('layouts.admin.master')
 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Edit Data Nasabah
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                 <strong>Upsss!</strong> Ditemukan Beberapa Masalah Dalam Penginputan<br><br>
                 <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('nasabah.update', $nasabah->Id_Nasabah) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Id_Nasabah">Id_Nasabah</label> 
                    <input type="text" name="Id_Nasabah" class="form-control" id="Id_Nasabah" value="{{ $nasabah->Id_Nasabah }}" aria-describedby="Id_Nasabah" > </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label> 
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $nasabah->Nama }}" aria-describedby="Nama" > 
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label> 
                        <input type="Username" name="Username" class="form-control" id="Username" value="{{ $nasabah->Kelas }}" aria-describedby="Username" > 
                    </div>
                    <div class="form-group">
                        <label for="TangalLahir">TangalLahir</label> 
                        <input type="TangalLahir" name="TangalLahir" class="form-control" id="TangalLahir" value="{{ $nasabah->Jurusan }}" aria-describedby="TangalLahir" > 
                    </div>
                    <div class="form-group">
                        <label for="JenisKelamin">JenisKelamin</label> 
                        <input type="JenisKelamin" name="JenisKelamin" class="form-control" id="JenisKelamin" value="{{ $nasabah->Email }}" aria-describedby="JenisKelamin" > 
                    </div>
                    <div class="form-group">
                        <label for="Usia">Usia</label> 
                        <input type="Usia" name="JenisKelamin" class="form-control" id="JenisKelamin" value="{{ $nasabah->Email }}" aria-describedby="JenisKelamin" > 
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label> 
                        <input type="Alamat" name="Alamat" class="form-control" id="Alamat" value="{{ $nasabah->Alamat }}" aria-describedby="Alamat" > 
                    </div>
                    <div class="form-group">
                        <label for="Pekerjaan">Pekerjaan</label> 
                        <input type="Pekerjaan" name="Pekerjaan" class="form-control" id="Pekerjaan" value="{{ $nasabah->Pekerjaan }}" aria-describedby="Pekerjaan" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
