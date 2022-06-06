@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Tambah Data Nasabah</h3>
        </div>
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