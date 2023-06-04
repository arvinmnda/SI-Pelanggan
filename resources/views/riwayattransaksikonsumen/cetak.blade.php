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

<h1>Data Riwayat Transaksi Konsumen</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>id transaksi </th>
    <th>id transaksi penukaran poin</th>
    <th>nama barang </th>
    <th>total harga</th>
    <th>jumlah barang</th>
  </tr>
  <tr>
    @php($no = 1)
    @foreach ($riwayattransaksikonsumen as $row)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $row->id_transaksi }}</td>
        <td>{{ $row->id_transaksi_penukaran_poin }}</td>
        <td>{{ $row->nama_barang }}</td>
        <td>{{ $row->total_harga }}</td>
        <td>{{ $row->jumlah_barang }}</td>
    </tr>
    @endforeach
  </tr>
</table>

</body>
</html>