@extends('layouts.app')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Poin</h1>
        <a href="{{ route('datapoin.tambah') }}" class="btn btn-primary mb-3">Tambah Poin</a>
        <a href="{{ route('datapoin.downloadpdf') }}" class="btn btn-primary mb-3">Cetak Data</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Poin
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Poin</th>
                            <th>jumlah Poin</th>
                            <th>Nama Konsumen</th>
                            <th>Nama Pelanggan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($datapoin as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->kode_poin }}</th>
                            <th>{{ $row->jumlah_poin }}</th>
                            <th>{{ $row->nama_konsumen }}</th>
                            <th>{{ $row->nama_pelanggan }}</th>
                            <td>
                                <a href="{{ route('datapoin.edit',  $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('datapoin.hapus',  $row->id) }}" class="btn btn-danger">Hapus</a>
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