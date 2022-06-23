<!DOCTYPE html>
<html>
<head>
<title>Data Barang</title>
</head>
<body>
<style type="text/css">
    table tr td,
    table tr th{
font-size: 9pt;
}
</style>
<center>
<h5>Laporan Barang</h4>
</center>
<table class='table table-bordered'>
<thead>
<tr>
                        <th>Kode Barang</th>
                        <th>Kode Nasabah</th>
                        <th>Nama Barang</th>
                        <th>Gambar</th>
                        <th>Pemilik</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Harga Gadai</th>
                        <th>Status</th>
                        <th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach ($barang as $brg)
                      <tr>
                      <td>{{ $brg->Kd_Barang }}</td>
                      <td>{{ $brg->Id_Nasabah }}</td>
                      <td>{{ $brg->Nama }}</td>
                      <td><img width="1000px" height="1000px" src="{{asset('storage/'.$brg->Foto)}}"></td>
                      <td>{{ $brg->Pemilik }}</td>
                      <td>{{ $brg->TanggalMasuk }}</td>
                      <td>{{ $brg->TanggalKeluar }}</td>
                      <td>{{ $brg->HargaGadai }}</td>
                      <td>{{ $brg->Status }}</td>
                        
                      </tr>
                      @endforeach
</tbody>
</table>
</body>
</html>