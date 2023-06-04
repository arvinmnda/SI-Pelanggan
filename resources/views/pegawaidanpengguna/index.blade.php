@extends('layouts.app')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Pegawai dan Pengguna</h1>
        <a href="{{ route('pegawaidanpengguna.tambah') }}" class="btn btn-primary mb-3">Tambah Pegawai dan Pengguna</a>
        <a href="/downloadpdf" class="btn btn-primary mb-3">Cetak Data</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Pegawai dan Pengguna
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id pegawai</th>
                            <th>nama pengguna</th>
                            <th>nama pegawai</th>
                            <th>jabatan pegawai</th>
                            <th>no telepon pegawai</th>
                            <th>email pengguna</th>
                            <th>email pegawai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($pegawaidanpengguna as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->id_pegawai }}</th>
                            <th>{{ $row->nama_pengguna }}</th>
                            <th>{{ $row->nama_pegawai }}</th>
                            <th>{{ $row->jabatan_pegawai }}</th>
                            <th>{{ $row->no_telepon_pegawai }}</th>
                            <th>{{ $row->email_pengguna }}</th>
                            <th>{{ $row->email_pegawai }}</th>
                            <td>
                                <a href="{{ route('pegawaidanpengguna.edit',  $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('pegawaidanpengguna.hapus',  $row->id) }}" class="btn btn-danger">Hapus</a>
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