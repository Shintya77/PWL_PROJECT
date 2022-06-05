@extends('layouts.admin.master')
 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">Detail Data Nasabah</div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Id Nasabah: </b>{{$nasabah->Id_Nasabah}}</li>
                <li class="list-group-item"><b>Nama: </b>{{$nasabah->Nama}}</li>
                <li class="list-group-item"><b>Username: </b>{{$nasabah->Username}}</li>
                <li class="list-group-item"><b>TangalLahir: </b>{{$nasabah->TangalLahir}}</li>
                <li class="list-group-item"><b>JenisKelamin: </b>{{$nasabah->JenisKelamin}}</li>
                <li class="list-group-item"><b>Usia: </b>{{$nasabah->Usia}}</li>
                <li class="list-group-item"><b>Alamat: </b>{{$nasabah->Alamat}}</li>
                <li class="list-group-item"><b>Pekerjaan: </b>{{$nasabah->Pekerjaan}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('nasabah.index') }}">Kembali</a>
        </div>
</div>
</div>
@endsection