@extends('layouts.app')
@section('title', 'Form Data Poin')
@section('contents')
<form action="{{ isset($datapoin) ? route('datapoin.tambah.update', $datapoin->id) : route('datapoin.tambah.simpan') }}" method="post">
  @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($datapoin) ? 'Form Edit Data Poin' : 'Form Tambah Data Poin' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_poin">Kode Poin</label>
              <input type="text" class="form-control" id="kode_poin" name="kode_poin" value="{{ isset($datapoin) ? $datapoin->kode_poin : '' }}">
            </div>
            <div class="form-group">
              <label for="jumlah_poin">Jumlah Poin</label>
              <input type="text" class="form-control" id="jumlah_poin" name="jumlah_poin" value="{{ isset($datapoin) ? $datapoin->jumlah_poin : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_konsumen">Nama konsumen</label>
              <select name="nama_konsumen" id="nama_konsumen" class="form-control">
                    <option value="" selected disabled hidden>-- Pilih --</option>
                    @foreach ($konsumen as $item)
                        <option value="{{ $item->nama_konsumen }}">{{ $item->nama_konsumen }}</option>
                    @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="nama_pelanggan">nama_pelanggan</label>
              <select name="nama_pelanggan" id="nama_pelanggan" class="form-control">
                <option value="" selected disabled hidden>-- Pilih --</option>
                @foreach ($pelanggan as $item)
                    <option value="{{ $item->nama_pelanggan}}">{{ $item->nama_pelanggan }}</option>
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
