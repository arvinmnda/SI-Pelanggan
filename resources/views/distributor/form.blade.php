@extends('layouts.app')
@section('title', 'Form Distributor')
@section('contents')
<form action="{{ isset($distributor) ? route('distributor.tambah.update', $distributor->id) : route('distributor.tambah.simpan') }}" method="post">
  @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($distributor) ? 'Form Edit Distributor' : 'Form Tambah Distributor' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="id_distributor">ID Distributor</label>
              <input type="text" class="form-control" id="id_distributor" name="id_distributor" value="{{ isset($distributor) ? $distributor->id_distributor : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_distributor">Nama Distributor</label>
              <input type="text" class="form-control" id="nama_distributor" name="nama_distributor" value="{{ isset($distributor) ? $distributor->nama_distributor : '' }}">
            </div>
            <div class="form-group">
                <label for="alamat_distributor">Alamat Distributor</label>
                <input type="text" class="form-control" id="alamat_distributor" name="alamat_distributor" value="{{ isset($distributor) ? $distributor->alamat_distributor : '' }}">
              </div>
              <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{ isset($distributor) ? $distributor->no_telepon : '' }}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ isset($distributor) ? $distributor->email : '' }}">
              </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </form>
@endsection
