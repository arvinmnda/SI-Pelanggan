@extends('layouts.app')
@section('title', 'Form Jenis Transaksi')
@section('contents')
<form action="{{ isset($jenistransaksi) ? route('jenistransaksi.tambah.update', $jenistransaksi->id) : route('jenistransaksi.tambah.simpan') }}" method="post">
  @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($jenistransaksi) ? 'Form Edit Jenis Transaksi' : 'Form Tambah Jenis Transaksi' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_jenis_transaksi">Kode Jenis Transaksi</label>
              <input type="text" class="form-control" id="kode_jenis_transaksi" name="kode_jenis_transaksi" value="{{ isset($jenistransaksi) ? $jenistransaksi->kode_jenis_transaksi : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_jenis_transaksi">Nama Jenis Transaksi</label>
              <input type="text" class="form-control" id="nama_jenis_transaksi" name="nama_jenis_transaksi" value="{{ isset($jenistransaksi) ? $jenistransaksi->nama_jenis_transaksi : '' }}">
            </div>
            <div class="form-group">
                <label>ID Konsumen</label>
                <select name="id_konsumen" id="id_konsumen" class="form-control">
                    <option value="" selected disabled hidden>-- Pilih --</option>
                    @foreach ($konsumen as $item)
                        <option value="{{ $item->id_konsumen }}">{{ $item->id_konsumen }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="id_pelanggan">ID Pelanggan</label>
                <select name="id_pelanggan" id="id_pelanggan" class="form-control">
                  <option value="" selected disabled hidden>-- Pilih --</option>
                  @foreach ($pelanggan as $item)
                      <option value="{{ $item->id_pelanggan }}">{{ $item->id_pelanggan }}</option>
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
