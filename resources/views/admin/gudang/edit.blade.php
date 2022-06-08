@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Edit Data Barang</h3>
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
            <form method="post" action="{{ route('gudang.update', $gudang->kd_Barang) }}" enctype="multipart/form-data"  id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="kd_Petugas">Kode_Barang</label>
                    <input type="text" name="kd_Barang" class="form-control" id="kd_Barang" value="{{ $gudang->kd_Barang }}" aria-describedby="kd_Barang" > </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $gudang->Nama }}" aria-describedby="Nama" >
                    </div>
                    <div class="form-group">
                        <label for="Pemilik">Pemilik</label>
                        <input type="Pemilik" name="Pemilik" class="form-control" id="Pemilik" value="{{ $gudang->Pemilik }}" aria-describedby="Pemilik" ></div>
                    <div class="form-group">
                        <label for="TanggalLahir">Tanggal Lahir</label>
                        <input type="TanggalLahir" name="TanggalLahir" class="form-control" id="TanggalLahir" value="{{ $gudang->TanggalLahir}}" aria-describedby="TanggalLahir" >
                    </div>
                    
                    <div class="form-group">
                        <label for="Deskripsi">Deskripsi</label>
                        <input type="Deskripsi" name="Deskripsi" class="form-control" id="Deskripsi" value="{{ $gudang->Deskripsi }}" aria-describedby="Deskripsi" >
                    </div>
                    <div class="form-group">
                        <label for="Kondisi">Kondisi</label>
                        <input type="Kondisi" name="Kondisi" class="form-control" id="Kondisi" value="{{ $gudang->Kondisi }}" aria-describedby="Kondisi" >
                    </div>
                    <div class="form-group">
                        <label for="Foto">Foto</label>
                        <input type="file" class="form-control" required="required" name="Foto" value="{{$gudang->Foto}}"><br>
                        <img width="100px" height="100px" src="{{asset('storage/'.$gudang->Foto)}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 

