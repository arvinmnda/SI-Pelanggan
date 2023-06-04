@extends('layouts.app')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Konsumen</h1>
        <a href="{{ route('konsumen.tambah') }}" class="btn btn-primary mb-3">Tambah Konsumen</a>
        <a href="{{ route('konsumen.downloadpdf') }}" class="btn btn-primary mb-3">Cetak Data</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Konsumen
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id konsumen</th>
                            <th>nama konsumen</th>
                            <th>alamat </th>
                            <th>email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($konsumen as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->id_konsumen }}</th>
                            <th>{{ $row->nama_konsumen }}</th>
                            <th>{{ $row->alamat }}</th>
                            <th>{{ $row->email }}</th>
                            <td>
                                <a href="{{ route('konsumen.edit',  $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('konsumen.hapus',  $row->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection