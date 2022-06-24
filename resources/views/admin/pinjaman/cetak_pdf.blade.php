<!DOCTYPE html>
<html>
<head>
<title> Pinjaman Nasabah</title>
</head>
<body>
<style type="text/css">
table tr td,
table tr th{
font-size: 9pt;
}
</style>
<center>
<h5>Laporan Pinjaman Nasabah</h4>
</center>
<table class='table table-bordered'>
<thead>
<tr>
                        <th>Kode Pinjaman</th>
                        <th>Nama Nasabah</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Pinjaman</th>
                        <th>Jangka Waktu</th>
</tr>
</thead>
<tbody>
@foreach($pinjaman as $pjm)
<tr>
<tr>
                      <td>{{ $pjm->Kd_Pinjaman }}</td>
                      <td>{{ $pjm->Pemilik }}</td>
                      <td>{{ $pjm->Nama }}</td>
                      <td>{{ $pjm->JumlahPinjaman}}</td>
                      <td>{{ $pjm->JangkaWaktu }}</td>
                     
                       
                      </tr>
@endforeach
</tbody>
</table>
</body>
</html>