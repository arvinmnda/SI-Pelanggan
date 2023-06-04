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

<h1>Data Jenis Transaksi</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>kode jenis transaksi</th>
    <th>nama jenis transaksi</th>
    <th>id konsumen </th>
    <th>id pelanggan</th>
  </tr>
  <tr>
    @php($no = 1)
    @foreach ($jenistransaksi as $row)
    <tr>
        <td>{{ $no++ }}</th>
        <td>{{ $row->kode_jenis_transaksi }}</td>
        <td>{{ $row->nama_jenis_transaksi }}</td>
        <td>{{ $row->id_konsumen }}</td>
        <td>{{ $row->id_pelanggan }}</td>
    </tr>
    @endforeach
  </tr>
</table>

</body>
</html>