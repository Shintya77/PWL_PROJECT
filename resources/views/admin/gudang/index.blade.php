@extends('layouts.admin.master')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-table"></i> Data Gudang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <div>
                    <a href="{{ route('gudang.create')}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Tambah Data</a>
                    <!-- <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Edit Data</a>
                    <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Hapus Data</a> -->
                  </div>
                  <br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Pemilik</th>
                        <th>Deskripsi</th>
                        <th>Kondisi</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($paginate as $gdg)
                      <tr>
                      <td>{{ $gdg->Kd_Barang }}</td>
                      <td>{{ $gdg->Nama }}</td>
                      <td>{{ $gdg->Pemilik }}</td>
                      <td>{{ $gdg->Deskripsi}}</td>
                      <td>{{ $gdg->Kondisi }}</td>
                      <td><img width="500px" height="500px" src="{{asset('storage/'.$gdg->Foto)}}"></td>
                     
                        <td>
                          <form action="{{ route('gudang.destroy',$gdg->Kd_Barang) }}" method="POST">
                              <a class="btn btn-info" href="{{ route('gudang.show',$gdg->Kd_Barang) }}">Detail</a>
                              <a class="btn btn-primary" href="{{ route('gudang.edit',$gdg->Kd_Barang) }}">Edit</a>
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