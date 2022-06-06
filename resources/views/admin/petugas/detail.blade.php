@extends('layouts.admin.master')
 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;" >
        <div class="card-header">Detail Data Petugas</div>
        <div class="card-body">
            <ul class="list-group list-group-flush ">
                <li class="list-group-item-light"><b>id_Petugas: </b>{{$petugas->id_Petugas}}</li>
                <li class="list-group-item-light"><b>Nama: </b>{{$petugas->Nama}}</li>
                <li class="list-group-item-light"><b>Username: </b>{{$petugas->Username}}</li>
                <li class="list-group-item-light"><b>TanggalLahir: </b>{{$petugas->TanggalLahir}}</li>
                <li class="list-group-item-light"><b>JenisKelamin: </b>{{$petugas->JenisKelamin}}</li>
                <li class="list-group-item-light"><b>Usia: </b>{{$petugas->Usia}}</li>
                <li class="list-group-item-light"><b>Alamat: </b>{{$petugas->Alamat}}</li>
                <li class="list-group-item-light"><b>Jabatan: </b>{{$petugas->Jabatan}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('petugas.index') }}">Kembali</a>
        </div>
</div>
</div>
@endsection

