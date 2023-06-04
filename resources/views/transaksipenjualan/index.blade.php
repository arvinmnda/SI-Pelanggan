@extends('layouts.app')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Transaksi Penjualan</h1>
        <a href="{{ route('transaksipenjualan.tambah') }}" class="btn btn-primary mb-3">Tambah Transaksi Penjualan</a>
        <a href="{{ route('transaksipenjualan.downloadpdf') }}" class="btn btn-primary mb-3">Cetak Data</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Transaksi Penjualan
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id transaksi </th>
                            <th>tanggal transaksi</th>      
                            <th>nama barang </th>
                            <th>harga</th>
                            <th>total harga</th>
                            <th>jumlah barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($transaksipenjualan as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->id_transaksi }}</th>
                            <th>{{ $row->tanggal_transaksi }}</th>
                            <th>{{ $row->nama_barang }}</th>
                            <th>{{ $row->harga }}</th>
                            <th>{{ $row->total_harga }}</th>
                            <th>{{ $row->jumlah_barang }}</th>
                            <td>
                                <a href="{{ route('transaksipenjualan.edit',  $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('transaksipenjualan.hapus',  $row->id) }}" class="btn btn-danger">Hapus</a>
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