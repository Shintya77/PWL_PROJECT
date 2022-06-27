@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Tambah Data Pembayaran</h3>
        </div>

            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Upss!</strong> Ditemukan Beberapa Masalah Dalam Penginputan<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('pembayaran.store') }}" enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Kd_Pinjaman">Kode Pinjaman</label>
                        <select name="Kd_Pinjaman" id="Kd_Pinjaman" class="form-control" required="required">
                            @foreach ($pinjaman as $pjm)
                                <option value="{{$pjm->Kd_Pinjaman}}" >{{$pjm->Kd_Pinjaman}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NamaNasabah">Nama Nasabah</label>
                        <select name="NamaNasabah" id="NamaNasabah" class="form-control" required="required">
                            @foreach ($pinjaman as $pjm)
                                <option value="{{$pjm->Pemilik}}" >{{$pjm->Pemilik}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NamaBarang">Nama Barang</label>
                        <select name="NamaBarang" id="NamaBarang" class="form-control" required="required">
                            @foreach ($pinjaman as $pjm)
                                <option value="{{$pjm->Nama}}" >{{$pjm->Nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="TotalBayar">Total Bayar</label> 
                        <input type="TotalBayar" name="TotalBayar" class="form-control" id="TotalBayar" aria-describedby="TotalBayar" > 
                    </div>
                    <div class="form-group">
                        <label for="TanggaAkhir">Tanggal Akhir Bayar</label> 
                        <input type="date" name="TanggaAkhir" class="form-control" id="TanggaAkhir" aria-describedby="TanggaAkhir" > 
                    </div>
                    <div class="form-group">
                        <label for="Status">Status</label> 
                        <input type="Status" name="Status" class="form-control" id="Status" aria-describedby="Status" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('pembayaran.index') }}">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection