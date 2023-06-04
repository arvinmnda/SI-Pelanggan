@extends('layouts.app')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Distributor</h1>
        <a href="{{ route('distributor.tambah') }}" class="btn btn-primary mb-3">Tambah Distributor</a>
        <a href="{{ route('distributor.downloadpdf') }}" class="btn btn-primary mb-3">Cetak Data</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Distributor
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id distributor</th>
                            <th>nama distributor</th>
                            <th>alamat distributor </th>
                            <th>no_telepon</th>
                            <th>email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($distributor as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->id_distributor }}</th>
                            <th>{{ $row->nama_distributor }}</th>
                            <th>{{ $row->alamat_distributor }}</th>
                            <th>{{ $row->no_telepon }}</th>
                            <th>{{ $row->email }}</th>
                            <td>
                                <a href="{{ route('distributor.edit',  $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('distributor.hapus',  $row->id) }}" class="btn btn-danger">Hapus</a>
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