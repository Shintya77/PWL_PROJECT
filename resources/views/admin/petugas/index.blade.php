@extends('layouts.admin.master')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-table"></i> Data Petugas</h3>
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
                        <th>Id Petugas</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Alamat</th>
                        <th>Jabatan</th>
                      </tr>
                    </thead>
                    <tbody>
            
                    @foreach ($ptg as $ptg)
    <tr>
        <td>{{ $ptg->id_Petugas }}</td>
        <td>{{ $ptg->Nama }}</td>
        <td>{{ $ptg->Username }}</td>
        <td>{{ $ptg->TanggalLahir}}</td>
        <td>{{ $ptg->JenisKelamin }}</td>
        <td>{{ $ptg->Usia }}</td>
        <td>{{ $ptg->Alamat }}</td>
        <td>{{ $ptg->Jabatan }}</td>
        <td>

        <td>
            <form action="{{ route('petugas.destroy',$ptg->id_Petugas) }}" method="POST">
                <a class="btn btn-info" href="{{ route('petugas.show',$ptg->id_Petugas) }}">Detail</a>
                <a class="btn btn-primary" href="{{ route('petugas.edit',$ptg->id_Petugas) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>

                    </tbody>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
          </div>
 @endsection