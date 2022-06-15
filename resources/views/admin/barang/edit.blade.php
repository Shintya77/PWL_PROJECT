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
                 <strong>Upsss!</strong> Ditemukan Beberapa Masalah Dalam Penginputan<br><br>
                 <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('barang.update', $barang->Kd_Barang ) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    {{-- <label for="Kd_Barang">Kode barang</label> 
                    <input type="text" name="Kd_Barang" class="form-control" id="Kd_Barang" value="{{ $barang->Kd_Barang }}" aria-describedby="Kd_Barang" > </div>
                     --}}
                    <div class="form-group">
                        <label for="Nama">Nama Barang</label> 
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $barang->Nama }}" aria-describedby="Nama" > 
                    </div>
                    <div class="form-group">
                        <label for="Kd_Nasabah">Kode Nasabah</label>
                        <select name="Kd_Nasabah" id="Kd_Nasabah" class="form-control" required="required">
                            @foreach ($nasabah as $nsb)
                                <option value="{{$nsb->Kd_Nasabah}}" {{$barang->Kd_Nasabah == $nsb->Kd_Nasabah ? 'selected' : ''}} >{{$nsb->Kd_Nasabah}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Foto">Gambar</label> 
                        <input type="file" class="form-control" required="required" name="Foto" value="{{$barang->Foto}}"><br>
                        <img width="100px" height="100px" src="{{asset('storage/'.$barang->Foto)}}">
                    </div>
                    <div class="form-group">
                        <label for="Pemilik">Pemilik</label>
                        <select name="Pemilik" id="Pemilik" class="form-control">
                            @foreach ($nasabah as $nsb)
                                <option value="{{$nsb->Nama}}" {{$barang->Nama == $nsb->Nama ? 'selected' : ''}} >{{$nsb->Nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="TanggalMasuk">TanggalMasuk</label> 
                        <input type="date" name="TanggalMasuk" class="form-control" id="TanggalMasuk" value="{{ $barang->TanggalMasuk }}" aria-describedby="TanggalMasuk" > 
                    </div>
                    <div class="form-group">
                        <label for="TanggalKeluar">TanggalKeluar</label> 
                        <input type="date" name="TanggalKeluar" class="form-control" id="TanggalKeluar" value="{{ $barang->TanggalKeluar }}" aria-describedby="TanggalKeluar" > 
                    </div>
                    <div class="form-group">
                        <label for="HargaGadai">HargaGadai</label> 
                        <input type="HargaGadai" name="HargaGadai" class="form-control" id="HargaGadai" value="{{ $barang->HargaGadai }}" aria-describedby="HargaGadai" > 
                    </div>
                    <div class="form-group">
                        <label for="Status">Status</label> 
                        <input type="Status" name="Status" class="form-control" id="Status" value="{{ $barang->Status }}" aria-describedby="Status" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
      </div>
</div>
@endsection
