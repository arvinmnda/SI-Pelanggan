@extends('layouts.app')
@section('title', 'Dashboard')
@section('contents')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Pelanggan Toko Komputer</li>
</ol>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Data Barang</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('barang') }}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Data Pelanggan</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('pelanggan') }}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Data Konsumen</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('konsumen') }}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Data Transaksi</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('transaksipenjualan') }}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
<img class="image-resize" src="/assets/img/06e3dba4a2cf8418ded3564e5be9e225.png" alt="Image Description">
<img class="image-resize" src="/assets/img/unnamed.png" alt="Image Description">
<img class="image-resize" src="/assets/img/3.jpg" alt="Image Description">
<img class="image-resize" src="/assets/img/Harddisk-Komputer.png" alt="Image Description">
@endsection