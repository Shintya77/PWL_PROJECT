@extends('layouts.user.master')
 
@section('content')


<div class="container">
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa "></i> Pembayaran Pinjaman</h3>
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
                <form method="post" action="{{ route('formpembayaran.store') }}" enctype="multipart/form-data" id="myForm">
                    @csrf
                    <input type="hidden" name="Kd_Pinjaman" value="{{$pinjaman->Kd_Pinjaman}}">
                    <div class="form-group">
                        <label for="NamaBarang">Nama Barang</label>
                        <input type="text" name="NamaBarang" class="form-control" id="NamaBarang" aria-describedby="NamaBarang" readonly value="{{$barang->Nama}}">
                    </div>
                    <div class="form-group">
                        <label for="NamaNasabah">Nama Nasabah</label>
                        <input type="text" name="NamaNasabah" class="form-control" id="NamaNasabah" aria-describedby="NamaNasabah" readonly value="{{$barang->Pemilik}}">
                    </div>
                    <div class="form-group">
                        <label for="TotalBayar">Total Bayar</label> 
                        <input type="TotalBayar" name="TotalBayar" class="form-control" id="TotalBayar" aria-describedby="TotalBayar" > 
                    </div>
                    <div class="form-group">
                        <label for="TanggaAkhir">Tanggal Akhir Bayar</label>
                        <input type="date" name="TanggaAkhir" class="form-control" id="TanggaAkhir" aria-describedby="TanggaAkhir" readonly value="{{$barang->TanggalKeluar}}">
                    </div>
                    <div class="form-group">
                        <label for="Status">Status</label> 
                        <input type="Status" name="Status" class="form-control" id="Status" aria-describedby="Status" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 </div>
</div>


@endsection