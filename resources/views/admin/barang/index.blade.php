@extends('layouts.admin.master')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-table"></i> Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <div>
                    <a href="{{ route('barang.create') }}" class="btn btn-primary">
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
                        <th>Kode Barang</th>
                        <th>Kode Nasabah</th>
                        <th>Nama Barang</th>
                        <th>Gambar</th>
                        <th>Pemilik</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Harga Gadai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($paginate as $brg)
                      <tr>
                      <td>{{ $brg->Kd_Barang }}</td>
                      <td>{{ $brg->Kd_Nasabah }}</td>
                      <td>{{ $brg->Nama }}</td>
                      <td><img width="1000px" height="1000px" src="{{asset('storage/'.$brg->Foto)}}"></td>
                      <td>{{ $brg->Pemilik }}</td>
                      <td>{{ $brg->TanggalMasuk }}</td>
                      <td>{{ $brg->TanggalKeluar }}</td>
                      <td>{{ $brg->HargaGadai }}</td>
                      <td>{{ $brg->Status }}</td>
                        <td>
                          <form action="{{ route('barang.destroy',$brg->Kd_Barang) }}" method="POST">
                              <a class="btn btn-info" href="{{ route('barang.show',$brg->Kd_Barang) }}">Detail</a>
                              <a class="btn btn-primary" href="{{ route('barang.edit',$brg->Kd_Barang) }}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Apakah anda yakin hapus data ini ?')" class="btn btn-danger">Hapus</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
          </div>
 @endsection