@extends('layouts.app')
@section('title', 'Form Riwayat Transaksi Konsumen')
@section('contents')
<form action="{{ isset($riwayattransaksikonsumen) ? route('riwayattransaksikonsumen.tambah.update', $riwayattransaksikonsumen->id) : route('riwayattransaksikonsumen.tambah.simpan') }}" method="post">
  @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($riwayattransaksikonsumen) ? 'Form Edit Riwayat Transaksi Konsumen' : 'Form Tambah Riwayat Transaksi Konsumen' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="id_transaksi">ID Transaksi</label>
              <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="{{ isset($riwayattransaksikonsumen) ? $riwayattransaksikonsumen->id_transaksi : '' }}">
            </div>
            <div class="form-group">
              <label for="id_transaksi_penukaran_poin">ID Transaksi Penukaran Poin</label>
              <input type="text" class="form-control" id="id_transaksi_penukaran_poin" name="id_transaksi_penukaran_poin" value="{{ isset($riwayattransaksikonsumen) ? $riwayattransaksikonsumen->id_transaksi_penukaran_poin : '' }}">
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
                <input type="text" class="form-control" id="total_harga" name="total_harga" value="{{ isset($riwayattransaksikonsumen) ? $riwayattransaksikonsumen->total_harga : '' }}">
              </div>
              <div class="form-group">
                <label for="jumlah_barang">Jumlah Barang</label>
                <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ isset($riwayattransaksikonsumen) ? $riwayattransaksikonsumen->jumlah_barang : '' }}">
              </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </form>
@endsection
