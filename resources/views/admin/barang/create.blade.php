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
                    <strong>Upss!</strong> Ditemukan Beberapa Masalah Dalam Penginputan<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('barang.store') }}" enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Kd_Barang">Kode Barang</label> 
                        <input type="text" name="Kd_Barang" class="form-control" id="Kd_Barang" aria-describedby="Kd_Barang" > 
                    </div>
                    <div class="form-group">
                        <label for="Kd_Nasabah">Kode Nasabah</label>
                        <select name="Kd_Nasabah" id="Kd_Nasabah" class="form-control" required="required">
                            @foreach ($nasabah as $nsb)
                                <option value="{{$nsb->Kd_Nasabah}}" >{{$nsb->Kd_Nasabah}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama Barang</label> 
                        <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" > 
                    </div>
                    <div class="form-group">
                        <label for="Foto">Gambar</label> 
                        <input type="file" class="form-control" required="required" name="Foto">
                    </div>
                    <div class="form-group">
                        <label for="Pemilik">Pemilik</label>
                        <select name="Pemilik" id="Pemilik" class="form-control" required="required">
                            @foreach ($nasabah as $nsb)
                                <option value="{{$nsb->Kd_Nasabah}}" >{{$nsb->Nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="TanggalMasuk">Tanggal Masuk</label> 
                        <input type="date" name="TanggalMasuk" class="form-control" id="TanggalMasuk" aria-describedby="TanggalMasuk" > 
                    </div>
                    <div class="form-group">
                        <label for="TanggalKeluar">Tanggal Keluar</label> 
                        <input type="date" name="TanggalKeluar" class="form-control" id="TanggalKeluar" aria-describedby="TanggalKeluar" > 
                    </div>
                    <div class="form-group">
                        <label for="HargaGadai">Harga Gadai</label> 
                        <input type="HargaGadai" name="HargaGadai" class="form-control" id="HargaGadai" aria-describedby="HargaGadai" > 
                    </div>
                    <div class="form-group">
                        <label for="Status">Status</label> 
                        <input type="Status" name="Status" class="form-control" id="Status" aria-describedby="Status" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection