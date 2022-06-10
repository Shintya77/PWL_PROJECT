@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Edit Data Pembayaran</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                 <strong>Upsss!</strong> Ditemukan Beberapa Masalah Dalam Penginputan<br><br>
                 <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('pembayaran.update', $pembayaran->Kd_Pembayaran ) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Kd_Pembayaran">Kode Pembayaran</label> 
                    <input type="text" name="Kd_Pembayaran" class="form-control" id="Kd_Pembayaran" value="{{ $pembayaran->Kd_Pembayaran }}" aria-describedby="Kd_Pembayaran" > </div>
                    <div class="form-group">
                        <label for="Kd_Pinjaman">Kode Pinjaman</label>
                        <select name="Kd_Pinjaman" id="Kd_Pinjaman" class="form-control" required="required">
                            @foreach ($pinjaman as $pjm)
                                <option value="{{$pjm->Kd_Pinjaman}}" {{$pembayaran->Kd_Pinjaman == $pjm->Kd_Pinjaman ? 'selected' : ''}} >{{$pjm->Kd_Pinjaman}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NamaNasabah">Nama Nasabah</label>
                        <select name="NamaNasabah" id="NamaNasabah" class="form-control" required="required">
                            @foreach ($pinjaman as $pjm)
                                <option value="{{$pjm->Pemilik}}" {{$pembayaran->NamaNasabah == $pjm->Pemilik ? 'selected' : ''}} >{{$pjm->Pemilik}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NamaNasabah">Barang</label>
                        <select name="NamaBarang" id="NamaBarang" class="form-control" required="required">
                            @foreach ($pinjaman as $pjm)
                                <option value="{{$pjm->Nama}}" {{$pembayaran->NamaBarang == $pjm->Nama ? 'selected' : ''}} >{{$pjm->Nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="TotalBayar">Total Bayar</label> 
                        <input type="TotalBayar" name="TotalBayar" class="form-control" id="TotalBayar" value="{{ $pembayaran->TotalBayar }}" aria-describedby="TotalBayar" > 
                    </div>
                    <div class="form-group">
                        <label for="TanggaAkhir">Tanggal Akhir</label> 
                        <input type="date" name="TanggaAkhir" class="form-control" id="TanggaAkhir" value="{{ $pembayaran->TanggaAkhir }}" aria-describedby="TanggaAkhir" > 
                    </div>
                    <div class="form-group">
                        <label for="Status">Status</label> 
                        <input type="Status" name="Status" class="form-control" id="Status" value="{{ $pembayaran->Status }}" aria-describedby="Status" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
      </div>
</div>
@endsection
