@extends('layouts.app')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Penukaran Poin</h1>
        <a href="{{ route('penukaranpoin.tambah') }}" class="btn btn-primary mb-3">Tambah Penukaran Poin</a>
        <a href="{{ route('penukaranpoin.downloadpdf') }}" class="btn btn-primary mb-3">Cetak Data</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Penukaran Poin
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>kode poin </th>
                            <th>jumlah poin </th>
                            <th>nama pelanggan</th>
                            <th>nama konsumen </th>
                            <th>nama barang konsumen</th>
                            <th>nama barang pelanggan</th>
                            <th>tanggal penukaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($penukaranpoin as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->kode_poin }}</th>
                            <th>{{ $row->jumlah_poin }}</th>
                            <th>{{ $row->nama_pelanggan }}</th>
                            <th>{{ $row->nama_konsumen }}</th>
                            <th>{{ $row->nama_barang_konsumen}}</th>
                            <th>{{ $row->nama_barang_pelanggan}}</th>
                            <th>{{ $row->tanggal_penukaran }}</th>
                            <td>
                                <a href="{{ route('penukaranpoin.edit',  $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('penukaranpoin.hapus',  $row->id) }}" class="btn btn-danger">Hapus</a>
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