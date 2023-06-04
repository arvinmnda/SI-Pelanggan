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

<h1>Data Transaksi Penjualan</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>id transaksi </th>
    <th>tanggal transaksi</th>      
    <th>nama barang </th>
    <th>harga</th>
    <th>total harga</th>
    <th>jumlah barang</th>
  </tr>
  <tr>
    @php($no = 1)
    @foreach ($transaksipenjualan as $row)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $row->id_transaksi }}</td>
        <td>{{ $row->tanggal_transaksi }}</td>
        <td>{{ $row->nama_barang }}</td>
        <td>{{ $row->harga }}</td>
        <td>{{ $row->total_harga}}</td>
        <td>{{ $row->jumlah_barang}}</td>
    </tr>
    @endforeach
  </tr>
</table>

</body>
</html>