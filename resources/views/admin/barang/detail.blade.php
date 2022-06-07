@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Detail Data Barang</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table id="example1" class="table table-bordered table-striped">
                    <tr>
                        <td>Kode Barang</td>
                        <td>{{ $barang->Kd_Barang}}</td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td>{{ $barang->Nama }}</td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td>
                        <img width="1000px" height="1000px" src="{{asset('storage/'.$barang->Foto)}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Pemilik</td>
                        <td>{{ $barang->Pemilik }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Masuk</td>
                        <td>{{ $barang->TanggalMasuk }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Keluar</td>
                        <td>{{ $barang->TanggalKeluar }}</td>
                    </tr>
                    <tr>
                        <td>Harga Gadai</td>
                        <td>{{ $barang->HargaGadai }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ $barang->Status }}</td>
                    </tr>
                  </table>
            </div>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('barang.index') }}">Kembali</a>
        </div>
</div>
</div>
@endsection