 @extends('layouts.user.master')
 
 @section('content')
 <div class="container">
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">
                <i class=""></i> Isi Data Diri Nasabah</h3>
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
                    <form method="post" action="{{ route('formgadai.store') }}" enctype="multipart/form-data" id="myForm">
                        @csrf
                        {{-- <div class="form-group">
                            <label for="Kd_Nasabah">Kode Nasabah</label> 
                            <input type="text" name="Kd_Nasabah" class="form-control" id="Kd_Nasabah" aria-describedby="Kd_Nasabah" > 
                        </div> --}}
                        <div class="form-group">
                            <label for="Nama">Nama</label> 
                            <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" > 
                        </div>
                        <div class="form-group">
                            <label for="Username">Username</label> 
                            <input type="Username" name="Username" class="form-control" id="Username" aria-describedby="Username" > 
                        </div>
                        <div class="form-group">
                            <label for="Foto">Foto</label> 
                            <input type="file" class="form-control" required="required" name="Foto">
                        </div>
                        <div class="form-group">
                            <label for="TangalLahir">TanggalLahir</label> 
                            <input type="date" name="TangalLahir" class="form-control" id="TangalLahir" aria-describedby="TangalLahir" > 
                        </div>
                        <div class="form-group">
                            <label for="JenisKelamin">JenisKelamin</label> 
                            <input type="JenisKelamin" name="JenisKelamin" class="form-control" id="JenisKelamin" aria-describedby="JenisKelamin" > 
                        </div>
                        <div class="form-group">
                            <label for="Usia">Usia</label> 
                            <input type="Usia" name="Usia" class="form-control" id="Usia" aria-describedby="Usia" > 
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label> 
                            <input type="Alamat" name="Alamat" class="form-control" id="Alamat" aria-describedby="Alamat" > 
                        </div>
                        <div class="form-group">
                            <label for="Pekerjaan">Pekerjaan</label> 
                            <input type="Pekerjaan" name="Pekerjaan" class="form-control" id="Pekerjaan" aria-describedby="Pekerjaan" > 
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
     </div>    
 </div>
@endsection