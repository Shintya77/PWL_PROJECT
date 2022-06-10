@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Detail Data Pembayaran</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table id="example1" class="table table-bordered table-striped">
                    <tr>
                        <td>Kode Pembayaran</td>
                        <td>{{ $pembayaran->Kd_Pembayaran}}</td>
                    </tr>
                    <tr>
                        <td>Kode Pinjaman</td>
                        <td>{{ $pembayaran->Kd_Pinjaman }}</td>
                    </tr>
                    <tr>
                        <td>Nama Nasabah</td>
                        <td>{{ $pembayaran->NamaNasabah }}</td>
                    </tr>
                    <tr>
                        <td>Barang</td>
                        <td>{{ $pembayaran->NamaBarang }}</td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td>{{ $pembayaran->TotalBayar }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Akhir</td>
                        <td>{{ $pembayaran->TanggaAkhir }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ $pembayaran->Status }}</td>
                    </tr>
                  </table>
            </div>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('pembayaran.index') }}">Kembali</a>
        </div>
</div>
</div>
@endsection