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
                    {{-- <div class="form-group">
                        <input type="text" name="Kd_Pembayaran" class="form-control" id="Kd_Pembayaran" aria-describedby="Kd_Pembayaran" > 
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="Kd_Pinjaman">Kode Pinjaman</label>
                        <select name="Kd_Pinjaman" id="Kd_Pinjaman" class="form-control" required="required">
                            @foreach ($pinjaman as $pjm)
                                <option value="{{$pjm->Kd_Pinjaman}}" >{{$pjm->Kd_Pinjaman}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label for="NamaNasabah">Nama Nasabah</label>
                        <input type="NamaNasabah" name="NamaNasabah" class="form-control" id="NamaNasabah" aria-describedby="NamaNasabah" > 
                    </div>
                    <div class="form-group">
                        <label for="NamaBarang">Nama Barang</label>
                        <input type="NamaBarang" name="NamaBarang" class="form-control" id="NamaBarang" aria-describedby="NamaBarang" > 
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
                </form>
            </div>
        </div>
    </div>
 </div>
</div>


@endsection