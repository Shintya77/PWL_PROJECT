@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Edit Data Pinjaman Nasabah </h3>
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
            <form method="post" action="{{ route('pinjaman.update', $pinjaman->Kd_Pinjaman) }}" enctype="multipart/form-data"  id="myForm">
                @csrf
                @method('PUT')

                <div class="form-group">
                        <label for="Kd_Pinjaman">Kode Pinjaman</label>
                        <input type="Kd_Pinjaman" name="Kd_Pinjaman" class="form-control" id="Kd_Pinjaman" value="{{ $pinjaman->Kd_Pinjaman }}" aria-describedby="Kd_Pinjaman" >
                    </div>


                    <div class="form-group">
                        <label for="Kd_Nasabah">Kode Nasabah</label>
                        <select name="Kd_Nasabah" id="Kd_Nasabah" class="form-control">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Kd_Nasabah}}" {{$pinjaman->Kd_Nasabah == $brg->Kd_Nasabah ? 'selected' : ''}} >{{$brg->Kd_Nasabah}}</option>
                            @endforeach
                        </select>
                    </div>


                <div class="form-group">
                        <label for="Kd_Barang">Kode Barang</label>
                        <select name="Kd_Barang" id="Kd_Barang" class="form-control">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Kd_Barang}}" {{$pinjaman->Kd_Barang == $brg->Kd_Barang ? 'selected' : ''}} >{{$brg->Kd_Barang}}</option>
                            @endforeach
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <label for="Pemilik">Pemilik</label>
                        <select name="Pemilik" id="Pemilik" class="form-control">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Pemilik}}" {{$pinjaman->Pemilik == $brg->Pemilik ? 'selected' : ''}} >{{$brg->Pemilik}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="Nama">Nama Barang</label>
                        <select name="Nama" id="Nama" class="form-control">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Nama}}" {{$pinjaman->Nama == $brg->Nama ? 'selected' : ''}} >{{$brg->Nama}}</option>
                            @endforeach
                        </select>
                    </div>

                   
                    <div class="form-group">
                        <label for="JumlahPinjaman">Jumlah Pinjaman</label>
                        <input type="JumlahPinjaman" name="JumlahPinjaman" class="form-control" id="JumlahPinjaman" value="{{ $pinjaman->JumlahPinjaman }}" aria-describedby="JumlahPinjaman" >
                    </div>
                    <div class="form-group">
                        <label for="JangkaWaktu">Jangka Waktu</label>
                        <input type="JangkaWaktu" name="JangkaWaktu" class="form-control" id="JangkaWaktu" value="{{ $pinjaman->JangkaWaktu }}" aria-describedby="JangkaWaktu" >
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 

