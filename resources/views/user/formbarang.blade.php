@extends('layouts.user.master')
 
 @section('content')
 
 <div class="container">

 <div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class=""></i> Isi Barang Yang Ingin Anda Ajukan</h3>
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
                <form method="post" action="{{ route('formbarang.store') }}" enctype="multipart/form-data" id="myForm">
                    @csrf
                    
                    <div class="form-group">
                        <label for="Nama">Nama Barang</label> 
                        <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" > 
                    </div>
                    <div class="form-group">
                        <label for="Foto">Gambar</label> 
                        <input type="file" class="form-control" required="required" name="Foto">
                    </div>
                  
                        

                    <div class="form-group">
                        <label for="TanggalMasuk">Tanggal Masuk</label> 
                        <input type="date" name="TanggalMasuk" class="form-control" id="TanggalMasuk" aria-describedby="TanggalMasuk" > 
                    </div>
                    <div class="form-group">
                        <label for="TanggalKeluar">Tanggal Keluar</label> 
                        <input type="date" name="TanggalKeluar" class="form-control" id="TanggalKeluar" aria-describedby="TanggalKeluar" > 
                    </div>
                    <div class="form-group">
                        <label for="HargaGadai">Harga Gadai</label> 
                        <input type="HargaGadai" name="HargaGadai" class="form-control" id="HargaGadai" aria-describedby="HargaGadai" > 
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