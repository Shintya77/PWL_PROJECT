@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Detail Data Petugas</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table id="example1" class="table table-bordered table-striped">
                    <tr>
                        <td>Kode Petugas</td>
                        <td>{{ $petugas->kd_Petugas}}</td>
                    </tr>
                    <tr>
                        <td>Nama Nasabah</td>
                        <td>{{ $petugas->Nama }}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>{{ $petugas->Username }}</td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td> <img width="100px" height="100px" src="{{asset('storage/'.$petugas->Foto)}}"> </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>{{ $petugas->TangalLahir }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>{{ $petugas->JenisKelamin }}</td>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td>{{ $petugas->Usia }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $petugas->Alamat }}</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>{{ $petugas->Jabatan }}</td>
                    </tr>
                  </table>
            </div>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('petugas.index') }}">Kembali</a>
        </div>
</div>
</div>
@endsection

