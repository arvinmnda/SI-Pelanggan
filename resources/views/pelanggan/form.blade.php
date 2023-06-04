@extends('layouts.app')
@section('title', 'Form Pelanggan')
@section('contents')
<form action="{{ isset($pelanggan) ? route('pelanggan.tambah.update', $pelanggan->id) : route('pelanggan.tambah.simpan') }}" method="post">
  @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($pelanggan) ? 'Form Edit Pelanggan' : 'Form Tambah Pelanggan' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="id_pelanggan">ID Pelanggan</label>
              <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" value="{{ isset($pelanggan) ? $pelanggan->id_pelanggan : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_pelanggan">Nama Pelanggan</label>
              <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="{{ isset($pelanggan) ? $pelanggan->nama_pelanggan : '' }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ isset($pelanggan) ? $pelanggan->alamat : '' }}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ isset($pelanggan) ? $pelanggan->email : '' }}">
              </div>

        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </form>
@endsection
