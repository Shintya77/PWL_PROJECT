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
                    <a href="{{ route('pembayaran.create')}}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Tambah Data</a>
                    <a href="{{ route('pembayaran.cetak') }}" class="btn btn-primary">
                      <i class="fa fa-edit"></i> Export PDF</a> 
                  </div>
                  <br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Kode Bayar</th>
                        <th>Kode Pinjaman</th>
                        <th>Nama Nasabah</th>
                        <th>Barang</th>
                        <th>Total Bayar</th>
                        <th>Tanggal Akhir Bayar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($paginate as $pbr)
                      <tr>
                      <td>{{ $pbr->Kd_Pembayaran }}</td>
                      <td>{{ $pbr->Kd_Pinjaman }}</td>
                      <td>{{ $pbr->NamaNasabah }}</td>
                     <td>{{ $pbr->NamaBarang }}</td>
                      <td>{{ $pbr->TotalBayar }}</td>
                      <td>{{ $pbr->TanggaAkhir }}</td>
                      <td>
                        <div class="badge badge-outline-success">{{ $pbr->Status }}</div></td>
                        <td>
                          <form action="{{ route('pembayaran.destroy',$pbr->Kd_Pembayaran) }}" method="POST">
                              <a class="btn btn-info" href="{{ route('pembayaran.show',$pbr->Kd_Pembayaran) }}">Detail</a>
                              <a class="btn btn-primary" href="{{ route('pembayaran.edit',$pbr->Kd_Pembayaran) }}">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Apakah anda yakin hapus data ini ?')" class="btn btn-danger">Hapus</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $paginate->links() }}
                </div>
              </div>
              <!-- /.card-body -->
          </div>
 @endsection