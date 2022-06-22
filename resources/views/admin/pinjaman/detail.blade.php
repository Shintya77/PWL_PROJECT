@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Detail Data Pinjaman Nasabah </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table id="example1" class="table table-bordered table-striped">
                <tr>
                        <td>Kode Pinjaman</td>
                        <td>{{ $pinjaman->Kd_Pinjaman}}</td>
                    </tr>
                    <tr>
                        <td>Kode Nasabah</td>
                        <td>{{ $pinjaman->Id_Nasabah}}</td>
                    </tr>
                    <tr>
                        <td>Kode Barang</td>
                        <td>{{ $pinjaman->Kd_Barang}}</td>
                    </tr>
                    <tr>
                        <td>Pemilik</td>
                        <td>{{ $pinjaman->Pemilik}}</td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td>{{ $pinjaman->Nama }}</td>
                    </tr>

        
                    <tr>
                        <td>Jumlah Pinjaman</td>
                        <td>{{ $pinjaman->JumlahPinjaman }}</td>
                    </tr>

                    <tr>
                        <td>Jangka Waktu</td>
                        <td>{{ $pinjaman->JangkaWaktu }}</td>
                    </tr>
                    
                    
                    
                  </table>
            </div>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('pinjaman.index') }}">Kembali</a>
        </div>
</div>
</div>
@endsection

