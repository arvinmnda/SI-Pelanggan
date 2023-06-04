<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 4px; /* Adjust the padding as needed */
}

#customers tr:nth-child(even){
  background-color: #f2f2f2;
}

#customers tr:hover {
  background-color: #ddd;
}

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

<h1>Data Pegawai dan Pengguna</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>id pegawai</th>
    <th>nama pengguna</th>
    <th>nama pegawai</th>
    <th>jabatan pegawai</th>
    <th>no telepon pegawai</th>
    <th>email pengguna</th>
    <th>email pegawai</th>
  </tr>
  <tr>
    @php($no = 1)
    @foreach ($pegawaidanpengguna as $row)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $row->id_pegawai }}</td>
        <td>{{ $row->nama_pengguna }}</td>
        <td>{{ $row->nama_pegawai }}</td>
        <td>{{ $row->jabatan_pegawai }}</td>
        <td>{{ $row->no_telepon_pegawai }}</td>
        <td>{{ $row->email_pengguna }}</td>
        <td>{{ $row->email_pegawai }}</td>
    </tr>
    @endforeach
  </tr>
</table>

</body>
</html>