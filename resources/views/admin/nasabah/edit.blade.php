@extends('layouts.admin.master')
 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa fa-table"></i> Edit Data user</h3>
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
            <form method="post" action="{{ route('nasabah.update', $user->id) }}" enctype="multipart/form-data" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    {{-- <label for="id">Kode user</label> 
                    <input type="text" name="id" class="form-control" id="id" value="{{ $user->id }}" aria-describedby="id" > </div>
                     --}}
                    <div class="form-group">
                        <label for="Nama">Nama</label> 
                        <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $user->name }}" aria-describedby="Nama" > 
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label> 
                        <input type="Username" name="Username" class="form-control" id="Username" value="{{ $user->Username }}" aria-describedby="Username" > 
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label> 
                        <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" aria-describedby="email" > 
                    </div>
                    <div class="form-group">
                        <label for="Foto">Foto</label> 
                        <input type="file" class="form-control" required="required" name="Foto" value="{{$user->Foto}}"><br>
                        <img width="100px" height="100px" src="{{asset('storage/'.$user->Foto)}}">
                    </div>
                    <div class="form-group">
                        <label for="TangalLahir">TanggalLahir</label> 
                        <input type="TangalLahir" name="TangalLahir" class="form-control" id="TangalLahir" value="{{ $user->TangalLahir }}" aria-describedby="TangalLahir" > 
                    </div>
                    <div class="form-group">
                        <label for="JenisKelamin">JenisKelamin</label> 
                        <input type="JenisKelamin" name="JenisKelamin" class="form-control" id="JenisKelamin" value="{{ $user->JenisKelamin }}" aria-describedby="JenisKelamin" > 
                    </div>
                    <div class="form-group">
                        <label for="Usia">Usia</label> 
                        <input type="Usia" name="Usia" class="form-control" id="Usia" value="{{ $user->Usia }}" aria-describedby="Usia" > 
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label> 
                        <input type="Alamat" name="Alamat" class="form-control" id="Alamat" value="{{ $user->Alamat }}" aria-describedby="Alamat" > 
                    </div>
                    <div class="form-group">
                        <label for="Pekerjaan">Pekerjaan</label> 
                        <input type="Pekerjaan" name="Pekerjaan" class="form-control" id="Pekerjaan" value="{{ $user->Pekerjaan }}" aria-describedby="Pekerjaan" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                   
                   
                </div>
                <a class="btn btn-success mt-3" href="{{ route('nasabah.index') }}">Kembali</a>
                </div>
            </form>
        </div>
        </div>
      </div>
</div>
@endsection
