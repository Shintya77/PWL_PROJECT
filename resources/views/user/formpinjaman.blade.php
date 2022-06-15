@extends('layouts.user.master')
 
@section('content')



<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> TIsi Data Pinjaman</h3>
        </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Upss!</strong> Ditemukan Beberapa Masalah dalam Penginputan<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('formpinjaman.store') }}"  enctype="multipart/form-data" id="myForm">
                    @csrf
                    <!-- <div class="form-group">
                        <label for="Kd_Pinjaman">Kode Pinjaman</label>
                        <input type="text" name="Kd_Pinjaman" class="form-control" id="Kd_Pinjaman" aria-describedby="Kd_Pinjaman" >
                    </div> -->

                    <!-- <div class="form-group">
                        <label for="Nama">Nama Barang</label>
                        <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" >
                    </div> -->

                    <div class="form-group">
                        <label for="Kd_Nasabah">Kode Nasabah</label>
                        <select name="Kd_Nasabah" id="Kd_Nasabah" class="form-control">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Kd_Nasabah}}" >{{$brg->Kd_Nasabah}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Kd_Barang">Kode Barang</label>
                        <select name="Kd_Barang" id="Kd_Barang" class="form-control">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Kd_Barang}}" >{{$brg->Kd_Barang}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="Pemilik">Pemilik</label>
                        <select name="Pemilik" id="Pemilik" class="Pemilik">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Pemilik}}" >{{$brg->Pemilik}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="Nama">Nama Barang</label>
                        <select name="Nama" id="Nama" class="form-control">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Nama}}" >{{$brg->Nama}}</option>
                            @endforeach
                        </select>
                    </div>

                   

                    <div class="form-group">
                            <label for="JumlahPinjaman">Jumlah Pinjaman</label>
                            <input type="JumlahPinjaman" name="JumlahPinjaman" class="form-control" id="JumlahPinjaman" aria-describedby="JumlahPinjaman">
                        </div>
                   
                   
                    <div class="form-group">
                        <label for="JangkaWaktu">Jangka Waktu</label>
                        <input type="JangkaWaktu" name="JangkaWaktu" class="form-control" id="JangkaWaktu" aria-describedby="JangkaWaktu" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
 </div>


@endsection