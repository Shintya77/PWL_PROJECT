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
                    <a href="{{ route('nasabah.create') }}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Tambah Data</a>
                  </div>
                  <br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Kode Nasabah</th>
                        <th>Nama Nasabah</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Foto</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($user as $nsb)
                      <tr>
                      <td>{{ $nsb->id }}</td>
                      <td>{{ $nsb->name }}</td>
                      <td>{{ $nsb->Username }}</td>
                      <td>{{ $nsb->email }}</td>
                      <td>{{ $nsb->password }}</td>
                      <td><img width="1000px" height="1000px" src="{{asset('storage/'.$nsb->Foto)}}"></td>
                      <td>{{ $nsb->TangalLahir }}</td>
                      <td>{{ $nsb->JenisKelamin }}</td>
                      <td>{{ $nsb->Usia }}</td>
                      <td>{{ $nsb->Alamat }}</td>
                      <td>{{ $nsb->Pekerjaan }}</td>
                        <td>
                          <form action="{{ route('nasabah.destroy',$nsb->id) }}" method="POST">
                              <a class="btn btn-info" href="{{ route('nasabah.show',$nsb->id) }}">Detail</a>
                              <a class="btn btn-primary" href="{{ route('nasabah.edit',$nsb->id) }}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Apakah anda yakin hapus data ini ?')" class="btn btn-danger">Hapus</button>

                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $user->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
 @endsection