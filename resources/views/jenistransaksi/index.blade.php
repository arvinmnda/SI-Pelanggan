@extends('layouts.app')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Jenis Transaksi</h1>
        <a href="{{ route('jenistransaksi.tambah') }}" class="btn btn-primary mb-3">Tambah Jenis Transaksi</a>
        <a href="{{ route('jenistransaksi.downloadpdf') }}" class="btn btn-primary mb-3">Cetak Data</a>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Jenis Transaksi
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>kode jenis transaksi</th>
                            <th>nama jenis transaksi</th>
                            <th>id konsumen </th>
                            <th>id pelanggan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($jenistransaksi as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->kode_jenis_transaksi }}</th>
                            <th>{{ $row->nama_jenis_transaksi }}</th>
                            <th>{{ $row->id_konsumen }}</th>
                            <th>{{ $row->id_pelanggan }}</th>
                            <td>
                                <a href="{{ route('jenistransaksi.edit',  $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('jenistransaksi.hapus',  $row->id) }}" class="btn btn-danger">Hapus</a>
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