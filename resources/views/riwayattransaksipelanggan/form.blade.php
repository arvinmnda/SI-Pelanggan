@extends('layouts.app')
@section('title', 'Form Riwayat Transaksi Pelanggan')
@section('contents')
<form action="{{ isset($riwayattransaksipelanggan) ? route('riwayattransaksipelanggan.tambah.update', $riwayattransaksipelanggan->id) : route('riwayattransaksipelanggan.tambah.simpan') }}" method="post">
  @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($riwayattransaksipelanggan) ? 'Form Edit Riwayat Transaksi Pelanggan' : 'Form Tambah Riwayat Transaksi Pelanggan' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="id_transaksi">ID Transaksi</label>
              <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="{{ isset($riwayattransaksipelanggan) ? $riwayattransaksipelanggan->id_transaksi : '' }}">
            </div>
            <div class="form-group">
              <label for="id_transaksi_penukaran_poin">ID Transaksi Penukaran Poin</label>
              <input type="text" class="form-control" id="id_transaksi_penukaran_poin" name="id_transaksi_penukaran_poin" value="{{ isset($riwayattransaksipelanggan) ? $riwayattransaksipelanggan->id_transaksi_penukaran_poin : '' }}">
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <select name="nama_barang" id="nama_barang" class="form-control">
                  <option value="" selected disabled hidden>-- Pilih --</option>
                  @foreach ($barang as $item)
                      <option value="{{ $item->nama_barang }}">{{ $item->nama_barang }}</option>
                  @endforeach
              </select>
              </div>
              <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga" value="{{ isset($riwayattransaksipelanggan) ? $riwayattransaksipelanggan->total_harga : '' }}">
              </div>
              <div class="form-group">
                <label for="jumlah_barang">Jumlah Barang</label>
                <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ isset($riwayattransaksipelanggan) ? $riwayattransaksipelanggan->jumlah_barang : '' }}">
              </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </form>
@endsection
