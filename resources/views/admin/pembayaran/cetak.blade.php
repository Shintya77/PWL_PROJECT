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
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pembayaran as $pbr)
                      <tr>
                      <td>{{ $pbr->Kd_Pembayaran }}</td>
                      {{-- <td>{{ $pbr->Kd_Pinjaman }}</td> --}}
                      <td>{{ $pbr->NamaNasabah }}</td>
                     <td>{{ $pbr->NamaBarang }}</td>
                      <td>{{ $pbr->TotalBayar }}</td>
                      <td>{{ $pbr->TanggaAkhir }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
          </div>
 @endsection