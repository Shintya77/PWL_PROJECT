@extends('layouts.admin.master')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-table"></i> Data Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <div>
                    <a href="{{ route('gudang.create')}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Tambah Data</a>
                    {{-- <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Edit Data</a>
                    <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Hapus Data</a> --}}
                  </div>
                  <br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Kode Bayar</th>
                        <th>Nama Nasabah</th>
                        <th>Nama Barang</th>
                        <th>Total Bayar</th>
                        <th>Tanggal Akhir Bayar</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
            
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
          </div>
 @endsection