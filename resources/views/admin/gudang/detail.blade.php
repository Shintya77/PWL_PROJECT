@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Detail Data Barang</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table id="example1" class="table table-bordered table-striped">
                    <tr>
                        <td>Kode Barang</td>
                        <td>{{ $gudang->kd_Barang}}</td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td>{{ $gudang->Nama }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>{{ $gudang->Pemilik }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>{{ $gudang->Deskripsi }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>{{ $gudang->Kondisi }}</td>
                    </tr>
                    
                    <tr>
                        <td>Foto</td>
                        <td> <img width="100px" height="100px" src="{{asset('storage/'.$gudang->Foto)}}"> </td>
                    </tr>
                    
                  </table>
            </div>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('gudang.index') }}">Kembali</a>
        </div>
</div>
</div>
@endsection

