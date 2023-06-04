@extends('layouts.app')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Riwayat Transaksi Pelanggan</h1>
        <a href="{{ route('riwayattransaksipelanggan.tambah') }}" class="btn btn-primary mb-3">Tambah Riwayat Transaksi Pelanggan</a>
        <a href="{{ route('riwayattransaksipelanggan.downloadpdf') }}" class="btn btn-primary mb-3">Cetak Data</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Riwayat Transaksi Pelanggan
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id transaksi </th>
                            <th>id transaksi_penukaran_poin</th>
                            <th>nama barang </th>
                            <th>total harga</th>
                            <th>jumlah barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($riwayattransaksipelanggan as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->id_transaksi }}</th>
                            <th>{{ $row->id_transaksi_penukaran_poin }}</th>
                            <th>{{ $row->nama_barang }}</th>
                            <th>{{ $row->total_harga }}</th>
                            <th>{{ $row->jumlah_barang }}</th>
                            <td>
                                <a href="{{ route('riwayattransaksipelanggan.edit',  $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('riwayattransaksipelanggan.hapus',  $row->id) }}" class="btn btn-danger">Hapus</a>
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