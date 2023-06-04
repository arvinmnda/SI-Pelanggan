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

<h1>Data Distributor</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>id distributor</th>
    <th>nama distributor</th>
    <th>alamat distributor </th>
    <th>no_telepon</th>
    <th>email</th>
  </tr>
  <tr>
    @php($no = 1)
    @foreach ($distributor as $row)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $row->id_distributor }}</td>
        <td>{{ $row->nama_distributor }}</td>
        <td>{{ $row->alamat_distributor }}</td>
        <td>{{ $row->no_telepon }}</th>
        <td>{{ $row->email }}</td>
    </tr>
    @endforeach
  </tr>
</table>

</body>
</html>