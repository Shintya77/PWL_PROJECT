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

<h1>Data Nasabah</h1>

<table id="customers">
  <tr>
    <th>Kode Nasabah</th>
    <th>Nama Nasabah</th>
    <th>Username</th>
    <th>Email</th>
    <th>Tanggal Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Usia</th>
    <th>Alamat</th>
    <th>Pekerjaan</th>
  </tr>
    @foreach ($user as $nsb)
    <tr>
    <td>{{ $nsb->id }}</td>
    <td>{{ $nsb->name }}</td>
    <td>{{ $nsb->Username }}</td>
    <td>{{ $nsb->email }}</td>
    <td>{{ $nsb->TangalLahir }}</td>
    <td>{{ $nsb->JenisKelamin }}</td>
    <td>{{ $nsb->Usia }}</td>
    <td>{{ $nsb->Alamat }}</td>
    <td>{{ $nsb->Pekerjaan }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>


