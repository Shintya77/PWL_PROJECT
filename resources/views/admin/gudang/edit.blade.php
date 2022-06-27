@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Edit Data Barang</h3>
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
            <form method="post" action="{{ route('gudang.update', $gudang->Kd_Barang) }}" enctype="multipart/form-data"  id="myForm">
                @csrf
                @method('PUT')

                <div class="form-group">
                        <label for="Kd_Barang">Kode Barang</label>
                        <select name="Kd_Barang" id="Kd_Barang" class="form-control">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Kd_Barang}}" {{$gudang->Kd_Barang == $brg->Kd_Barang ? 'selected' : ''}} >{{$brg->Kd_Barang}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Nama">Nama Barang</label>
                        <select name="Nama" id="Nama" class="form-control">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Nama}}" {{$gudang->Nama == $brg->Nama ? 'selected' : ''}} >{{$brg->Nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- <div class="form-group">
                        <label for="Pemilik">Pemilik</label>
                        <input type="Pemilik" name="Pemilik" class="form-control" id="Pemilik" value="{{ $gudang->Pemilik }}" aria-describedby="Pemilik" ></div> -->

                    
                        <div class="form-group">
                        <label for="Pemilik">Pemilik</label>
                        <select name="Pemilik" id="Pemilik" class="form-control">
                            @foreach ($barang as $brg)
                                <option value="{{$brg->Pemilik}}" {{$gudang->Pemilik == $brg->Pemilik ? 'selected' : ''}} >{{$brg->Pemilik}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Deskripsi">Deskripsi</label>
                        <input type="Deskripsi" name="Deskripsi" class="form-control" id="Deskripsi" value="{{ $gudang->Deskripsi }}" aria-describedby="Deskripsi" >
                    </div>
                    <div class="form-group">
                        <label for="Kondisi">Kondisi</label>
                        <input type="Kondisi" name="Kondisi" class="form-control" id="Kondisi" value="{{ $gudang->Kondisi }}" aria-describedby="Kondisi" >
                    </div>
                    <div class="form-group">
                        <label for="Foto">Foto</label>
                        <input type="file" class="form-control" required="required" name="Foto" value="{{$gudang->Foto}}"><br>
                        <img width="100px" height="100px" src="{{asset('storage/'.$gudang->Foto)}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('gudang.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
 

