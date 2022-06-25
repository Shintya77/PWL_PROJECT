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
  <h2>Data Pembayaran</h2>
  <h3>Data Penggadaian Si Gadai 2022</h3>
</center>

<table id="customers">
  <tr>
    <th>Kode Bayar</th>
    <th>Kode Pinjaman</th>
    <th>Nama Nasabah</th>
    <th>Barang</th>
    <th>Total Bayar</th>
    <th>Tanggal Akhir Bayar</th>
    <th>Status</th>
  </tr>
    @foreach ($pembayaran as $pbr)
    <tr>
      <td>{{ $pbr->Kd_Pembayaran }}</td>
      <td>{{ $pbr->Kd_Pinjaman }}</td>
      <td>{{ $pbr->NamaNasabah }}</td>
     <td>{{ $pbr->NamaBarang }}</td>
      <td>{{ $pbr->TotalBayar }}</td>
      <td>{{ $pbr->TanggaAkhir }}</td>
      <td>
        <div class="badge badge-outline-success">{{ $pbr->Status }}</div></td>
        <td>
    </tr>
    @endforeach
</table>
</body>
</html>