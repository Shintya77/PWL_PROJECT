@extends('layouts.admin.master')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-table"></i> Data Nasabah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <div>
                    <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Tambah Data</a>
                    <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Edit Data</a>
                    <a href="?page=add-pengguna" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Hapus Data</a>
                  </div>
                  <br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id Nasabah</th>
                        <th>Nama Nasabah</th>
                        <th>Username</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($nasabah as $nsb)
                      <tr>
                      <td>{{ $nsb->Id_Nasabah }}</td>
                      <td>{{ $nsb->Nama }}</td>
                      <td>{{ $nsb->Username }}</td>
                      <td>{{ $nsb->TanggalLahir }}</td>
                      <td>{{ $nsb->JenisKelamin }}</td>
                      <td>{{ $nsb->Usia }}</td>
                      <td>{{ $nsb->Alamat }}</td>
                      <td>{{ $nsb->Pekerjaan }}</td>
                        <td>
                          <form action="{{ route('nasabah.destroy',$nsb->Id_Nasabah) }}" method="POST">
                              <a class="btn btn-info" href="{{ route('nasabah.show',$nsb->Id_Nasabah) }}">Detail</a>
                              <a class="btn btn-primary" href="{{ route('nasabah.edit',$nsb->Id_Nasabah) }}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Hapus</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
 @endsection