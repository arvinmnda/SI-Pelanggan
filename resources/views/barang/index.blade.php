@extends('layouts.app')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Barang</h1>
        <a href="{{ route('barang.tambah') }}" class="btn btn-primary mb-3">Tambah Barang</a>
        <a href="{{ route('barang.downloadpdf') }}" class="btn btn-primary mb-3">Cetak Data</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Barang
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>stok Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($barang as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->kode_barang }}</th>
                            <th>{{ $row->nama_barang }}</th>
                            <th>{{ $row->kategori_barang }}</th>
                            <th>{{ $row->harga}}</th>
                            <th>{{ $row->stok_barang }}</th>
                            <td>
                                <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('barang.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
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