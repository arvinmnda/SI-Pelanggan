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

<h1>Data Penukaran Poin</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>kode poin </th>
    <th>jumlah poin </th>
    <th>nama pelanggan</th>
    <th>nama konsumen </th>
    <th>nama barang konsumen</th>
    <th>nama barang pelanggan</th>
    <th>tanggal penukaran</th>
  </tr>
  <tr>
    @php($no = 1)
    @foreach ($penukaranpoin as $row)
    <tr>
        <td>{{ $no++ }}</th>
        <td>{{ $row->kode_poin }}</td>
        <td>{{ $row->jumlah_poin }}</td>
        <td>{{ $row->nama_pelanggan }}</td>
        <td>{{ $row->nama_konsumen }}</td>
        <td>{{ $row->nama_barang_konsumen}}</td>
        <td>{{ $row->nama_barang_pelanggan}}</td>
        <td>{{ $row->tanggal_penukaran }}</th>
    </tr>
    @endforeach
  </tr>
</table>

</body>
</html>