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

<h1>Data Konsumen</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>id pelanggan</th>
    <th>nama pelanggan</th>
    <th>alamat </th>
    <th>email</th>
  </tr>
  <tr>
    @php($no = 1)
    @foreach ($pelanggan as $row)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $row->id_pelanggan }}</td>
        <td>{{ $row->nama_pelanggan }}</td>
        <td>{{ $row->alamat }}</td>
        <td>{{ $row->email }}</td>
    </tr>
    @endforeach
  </tr>
</table>

</body>
</html>