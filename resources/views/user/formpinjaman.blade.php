@extends('layouts.user.master')
 
@section('content')


<div class="container">
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class=""></i> Isi Data Pinjaman</h3>
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
</div>
</div>



@endsection