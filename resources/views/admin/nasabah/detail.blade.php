@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Detail Data Nasabah</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table id="example1" class="table table-bordered table-striped">
                    <tr>
                        <td>Kode Nasabah</td>
                        <td>{{ $user->id}}</td>
                    </tr>
                    <tr>
                        <td>Nama Nasabah</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>{{ $user->Username }}</td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>
                        <img width="1000px" height="1000px" src="{{asset('storage/'.$user->Foto)}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>{{ $user->TangalLahir }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>{{ $user->JenisKelamin }}</td>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td>{{ $user->Usia }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $user->Alamat }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>{{ $user->Pekerjaan }}</td>
                    </tr>
                  </table>
            </div>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('nasabah.index') }}">Kembali</a>
        </div>
</div>
</div>
@endsection