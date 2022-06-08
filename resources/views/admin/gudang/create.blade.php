@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Tambah Data Barang</h3>
        </div>
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
                <form method="post" action="{{ route('gudang.store') }}"  enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="kd_Barang">Kode Barang</label>
                        <input type="text" name="kd_Barang" class="form-control" id="kd_Barang" aria-describedby="kd_Barang" >
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" >
                    </div>
                    <div class="form-group">
                        <label for="Pemilik">Pemilik</label>
                        <input type="Pemilik" name="Pemilik" class="form-control" id="Pemilik" aria-describedby="Pemilik" >
                    </div>
                    <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <input type="date" name="Deskripsi" class="form-control" id="Deskripsi" aria-describedby="Deskripsi">
                        </div>
                   
                   
                    <div class="form-group">
                        <label for="Kondisi">Kondisi</label>
                        <input type="Kondisi" name="Kondisi" class="form-control" id="Kondisi" aria-describedby="Kondisi" >
                    </div>
                    <div class="form-group">
                        <label for="Foto">Foto</label>
                        <input type="file" class="form-control" required="required" name="Foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection

