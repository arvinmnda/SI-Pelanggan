@extends('layouts.app')
@section('title', 'Form Transaksi Penjualan')
@section('contents')
<form action="{{ isset($transaksipenjualan) ? route('transaksipenjualan.tambah.update', $transaksipenjualan->id) : route('transaksipenjualan.tambah.simpan') }}" method="post">
  @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($transaksipenjualan) ? 'Form Edit Transaksi Penjualan' : 'Form Tambah Transaksi Penjualan' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="id_transaksi">ID Transaksi</label>
              <select name="id_transaksi" id="id_transaksi" class="form-control">
                <option value="" selected disabled hidden>-- Pilih --</option>
                @foreach ($riwayattransaksikonsumen as $item)
                    <option value="{{ $item->id_transaksi }}">{{ $item->id_transaksi }}</option>
                @endforeach
                @foreach ($riwayattransaksipelanggan as $item)
                    <option value="{{ $item->id_transaksi }}">{{ $item->id_transaksi }}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
              <label for="tanggal_transaksi">Tanggal Transaksi</label>
              <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" value="{{ isset($transaksipenjualan) ? $transaksipenjualan->tanggal_transaksi : '' }}">
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <select name="nama_barang" id="nama_barang" class="form-control">
                  <option value="" selected disabled hidden>-- Pilih --</option>
                  @foreach ($riwayattransaksikonsumen as $item)
                      <option value="{{ $item->nama_barang}}">{{ $item->nama_barang }}</option>
                  @endforeach
                  @foreach ($riwayattransaksipelanggan as $item)
                      <option value="{{ $item->nama_barang }}">{{ $item->nama_barang }}</option>
                  @endforeach
              </select>
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <select name="harga" id="harga" class="form-control">
                  <option value="" selected disabled hidden>-- Pilih --</option>
                  @foreach ($barang as $item)
                      <option value="{{ $item->harga }}">{{ $item->harga }}</option>
                  @endforeach
              </select>
              </div>
              <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <select name="total_harga" id="total_harga" class="form-control">
                  <option value="" selected disabled hidden>-- Pilih --</option>
                  @foreach ($riwayattransaksikonsumen as $item)
                      <option value="{{ $item->total_harga}}">{{ $item->total_harga }}</option>
                  @endforeach
                  @foreach ($riwayattransaksipelanggan as $item)
                      <option value="{{ $item->total_harga }}">{{ $item->total_harga }}</option>
                  @endforeach
              </select>
              </div>
              <div class="form-group">
                <label for="jumlah_barang">Jumlah Barang</label>
                <select name="jumlah_barang" id="jumlah_barang" class="form-control">
                  <option value="" selected disabled hidden>-- Pilih --</option>
                  @foreach ($riwayattransaksikonsumen as $item)
                      <option value="{{ $item->jumlah_barang}}">{{ $item->jumlah_barang }}</option>
                  @endforeach
                  @foreach ($riwayattransaksipelanggan as $item)
                      <option value="{{ $item->jumlah_barang }}">{{ $item->jumlah_barang }}</option>
                  @endforeach
              </select>
              </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </form>
@endsection
