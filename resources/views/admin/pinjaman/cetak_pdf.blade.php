



<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#c td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<center>
  <h2>Data Pinjaman</h2>
  <h3>Data Penggadaian Si Gadai 2022</h3>
</center>

<table id="customers">
<tr>
                        <th>Kode Pinjaman</th>
                        <th>Nama Nasabah</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Pinjaman</th>
                        <th>Jangka Waktu</th>
</tr>
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
</table>
</body>
</html>