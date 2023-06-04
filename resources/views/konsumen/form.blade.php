@extends('layouts.app')
@section('title', 'Form Konsumen')
@section('contents')
<form action="{{ isset($konsumen) ? route('konsumen.tambah.update', $konsumen->id) : route('konsumen.tambah.simpan') }}" method="post">
  @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($konsumen) ? 'Form Edit Konsumen' : 'Form Tambah Konsumen' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="id_konsumen">ID Konsumen</label>
              <input type="text" class="form-control" id="id_konsumen" name="id_konsumen" value="{{ isset($konsumen) ? $konsumen->id_konsumen : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_konsumen">Nama Konsumen</label>
              <input type="text" class="form-control" id="nama_konsumen" name="nama_konsumen" value="{{ isset($konsumen) ? $konsumen->nama_konsumen : '' }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ isset($konsumen) ? $konsumen->alamat : '' }}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ isset($konsumen) ? $konsumen->email : '' }}">
              </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </form>
@endsection
