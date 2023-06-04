@extends('layouts.app')
@section('title', 'Form Penukaran Poin')
@section('contents')
<form action="{{ isset($penukaranpoin) ? route('penukaranpoin.tambah.update', $penukaranpoin->id) : route('penukaranpoin.tambah.simpan') }}" method="post">
  @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($penukaranpoin) ? 'Form Edit Penukaran Poin' : 'Form Tambah Penukaran Poin' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_poin">Kode Poin</label>
              <select name="kode_poin" id="kode_poin" class="form-control">
                <option value="" selected disabled hidden>-- Pilih --</option>
                @foreach ($datapoin as $item)
                    <option value="{{ $item->kode_poin }}">{{ $item->kode_poin }}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
              <label for="jumlah_poin">Jumlah Poin</label>
              <select name="jumlah_poin" id="jumlah_poin" class="form-control">
                <option value="" selected disabled hidden>-- Pilih --</option>
                @foreach ($datapoin as $item)
                    <option value="{{ $item->jumlah_poin }}">{{ $item->jumlah_poin }}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan</label>
                <select name="nama_pelanggan" id="nama_pelanggan" class="form-control">
                <option value="" selected disabled hidden>-- Pilih --</option>
                  @foreach ($pelanggan as $item)
                      <option value="{{ $item->nama_pelanggan }}">{{ $item->nama_pelanggan }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="nama_konsumen">Nama Konsumen</label>
                <select name="nama_konsumen" id="nama_konsumen" class="form-control">
                  <option value="" selected disabled hidden>-- Pilih --</option>
                  @foreach ($konsumen as $item)
                      <option value="{{ $item->nama_konsumen }}">{{ $item->nama_konsumen }}</option>
                  @endforeach
              </select>
              </div>
              <div class="form-group">
                <label for="nama_barang_konsumen">Nama Barang Konsumen</label>
                <select name="nama_barang_konsumen" id="nama_barang_konsumen" class="form-control">
                  <option value="" selected disabled hidden>-- Pilih --</option>
                  @foreach ($riwayattransaksikonsumen as $item)
                      <option value="{{ $item->nama_barang}}">{{ $item->nama_barang }}</option>
                  @endforeach
              </select>
              </div>
              <div class="form-group">
                <label for="nama_barang_pelanggan">Nama Barang Pelanggan</label>
                <select name="nama_barang_pelanggan" id="nama_barang_pelanggan" class="form-control">
                  <option value="" selected disabled hidden>-- Pilih --</option>
                  @foreach ($riwayattransaksipelanggan as $item)
                      <option value="{{ $item->nama_barang }}">{{ $item->nama_barang }}</option>
                  @endforeach
              </select>
              </div>
              <div class="form-group">
                <label for="tanggal_penukaran">Tanggal Penukaran</label>
                <input type="date" class="form-control" id="tanggal_penukaran" name="tanggal_penukaran" value="{{ isset($penukaranpoin) ? $penukaranpoin->tanggal_penukaran : '' }}">
              </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </form>
@endsection
