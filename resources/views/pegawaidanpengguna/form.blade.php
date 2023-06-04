@extends('layouts.app')
@section('title', 'Form Pegawai dan Pengguna')
@section('contents')
<form action="{{ isset($pegawaidanpengguna) ? route('pegawaidanpengguna.tambah.update', $pegawaidanpengguna->id) : route('pegawaidanpengguna.tambah.simpan') }}" method="post">
  @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($pegawaidanpengguna) ? 'Form Edit Pelanggan' : 'Form Tambah Pelanggan' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="id_pegawai">ID Pegawai</label>
              <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value="{{ isset($pegawaidanpengguna) ? $pegawaidanpengguna->id_pegawai : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_pengguna">Nama Pengguna</label>
              <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="{{ isset($pegawaidanpengguna) ? $pegawaidanpengguna->nama_pengguna : '' }}">
            </div>
            <div class="form-group">
                <label for="nama_pegawai">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ isset($pegawaidanpengguna) ? $pegawaidanpengguna->nama_pegawai : '' }}">
              </div>
              <div class="form-group">
                <label for="jabatan_pegawai">jabatan pegawai</label>
                <input type="text" class="form-control" id="jabatan_pegawai" name="jabatan_pegawai" value="{{ isset($pegawaidanpengguna) ? $pegawaidanpengguna->jabatan_pegawai : '' }}">
              </div>
              <div class="form-group">
                <label for="no_telepon_pegawai">no telepon pegawai</label>
                <input type="text" class="form-control" id="no_telepon_pegawai" name="no_telepon_pegawai" value="{{ isset($pegawaidanpengguna) ? $pegawaidanpengguna->no_telepon_pegawai : '' }}">
              </div>
              <div class="form-group">
                  <label for="email_pengguna">Email Pengguna</label>
                  <input type="text" class="form-control" id="email_pengguna" name="email_pengguna" value="{{ isset($pegawaidanpengguna) ? $pegawaidanpengguna->email_pengguna : '' }}">
                </div>
                <div class="form-group">
                  <label for="email_pegawai">Email Pegawai</label>
                  <input type="text" class="form-control" id="email_pegawai" name="email_pegawai" value="{{ isset($pegawaidanpengguna) ? $pegawaidanpengguna->email_pegawai : '' }}">
                </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </form>
@endsection
