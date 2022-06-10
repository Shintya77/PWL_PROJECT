@extends('layouts.admin.master')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-table"></i> Data Pinjaman</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <div>
                    <a href="{{ route('pinjaman.create')}}" class="btn btn-primary">
                      <!-- <i class="fa fa-edit"></i> Tambah Data</a>
                    <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Edit Data</a>
                    <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Hapus Data</a> -->
                  </div>
                  <br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Kode Pinjaman</th>
                        <th>Nama Nasabah</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Pinjaman</th>
                        <th>Jangka Waktu</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($paginate as $pjm)
                      <tr>
                      <td>{{ $pjm->Kd_Barang }}</td>
                      <td>{{ $pjm->Nama }}</td>
                      <td>{{ $pjm->Pemilik }}</td>
                      <td>{{ $pjm->Deskripsi}}</td>
                      <td>{{ $pjm->Kondisi }}</td>
                      <td><img width="500px" height="500px" src="{{asset('storage/'.$pjm->Foto)}}"></td>
                     
                        <td>
                          <form action="{{ route('gudang.destroy',$pjm->Kd_Barang) }}" method="POST">
                              <a class="btn btn-info" href="{{ route('gudang.show',$pjm->Kd_Barang) }}">Detail</a>
                              <a class="btn btn-primary" href="{{ route('gudang.edit',$pjm->Kd_Barang) }}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Apakah anda yakin hapus data ini ?')" class="btn btn-danger">Hapus</button>

                              
                          </form>
                        </td>
                      </tr>
                      @endforeach
                   
                    </tbody>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
          </div>
 @endsection