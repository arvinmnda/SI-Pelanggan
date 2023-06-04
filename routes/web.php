<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\JenisTransaksiController;
use App\Http\Controllers\RiwayatTransaksiPelangganController;
use App\Http\Controllers\RiwayatTransaksiKonsumenController;
use App\Http\Controllers\TransaksiPenjualanController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\DataPoinController;
use App\Http\Controllers\PenukaranPoinController;
use App\Http\Controllers\PegawaidanPenggunaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotpasswordController;
use App\Models\PegawaidanPengguna;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSimpan')->name('register.simpan');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAksi')->name('login.aksi');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function (){
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::controller(BarangController::class)->prefix('barang')->group(function(){
        Route::get('', 'index')->name('barang');
        Route::get('tambah', 'tambah')->name('barang.tambah');
        Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('barang.edit');
        Route::post('edit/{id}', 'update')->name('barang.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('barang.hapus');
    });
    Route::controller(BarangController::class)->prefix('barang')->group(function(){
        // Rute lainnya
        
        // Cetak PDF
        Route::get('downloadpdf', [BarangController::class, 'downloadpdf'])->name('barang.downloadpdf');
    });
    Route::controller(PelangganController::class)->prefix('pelanggan')->group(function(){
        Route::get('', 'index')->name('pelanggan');
        Route::get('tambah', 'tambah')->name('pelanggan.tambah');
        Route::post('tambah', 'simpan')->name('pelanggan.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('pelanggan.edit');
        Route::post('edit/{id}', 'update')->name('pelanggan.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('pelanggan.hapus');
    });
    Route::controller(PelangganController::class)->prefix('pelanggan')->group(function(){
        // Rute lainnya
        
        // Cetak PDF
        Route::get('downloadpdf', [PelangganController::class, 'downloadpdf'])->name('pelanggan.downloadpdf');
    });
    Route::controller(KonsumenController::class)->prefix('konsumen')->group(function(){
        Route::get('', 'index')->name('konsumen');
        Route::get('tambah', 'tambah')->name('konsumen.tambah');
        Route::post('tambah', 'simpan')->name('konsumen.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('konsumen.edit');
        Route::post('edit/{id}', 'update')->name('konsumen.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('konsumen.hapus');
    });
    Route::controller(KonsumenController::class)->prefix('konsumen')->group(function(){
        // Rute lainnya
        
        // Cetak PDF
        Route::get('downloadpdf', [KonsumenController::class, 'downloadpdf'])->name('konsumen.downloadpdf');
    });
    Route::controller(JenisTransaksiController::class)->prefix('jenistransaksi')->group(function(){
        Route::get('', 'index')->name('jenistransaksi');
        Route::get('tambah', 'tambah')->name('jenistransaksi.tambah');
        Route::post('tambah', 'simpan')->name('jenistransaksi.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('jenistransaksi.edit');
        Route::post('edit/{id}', 'update')->name('jenistransaksi.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('jenistransaksi.hapus');
    });
    Route::controller(JenisTransaksiController::class)->prefix('jenistransaksi')->group(function(){
        // Rute lainnya
        
        // Cetak PDF
        Route::get('downloadpdf', [JenisTransaksiController::class, 'downloadpdf'])->name('jenistransaksi.downloadpdf');
    });
    Route::controller(RiwayatTransaksiPelangganController::class)->prefix('riwayattransaksipelanggan')->group(function(){
        Route::get('', 'index')->name('riwayattransaksipelanggan');
        Route::get('tambah', 'tambah')->name('riwayattransaksipelanggan.tambah');
        Route::post('tambah', 'simpan')->name('riwayattransaksipelanggan.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('riwayattransaksipelanggan.edit');
        Route::post('edit/{id}', 'update')->name('riwayattransaksipelanggan.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('riwayattransaksipelanggan.hapus');
    });
    Route::controller(RiwayatTransaksiPelangganController::class)->prefix('riwayattransaksipelanggan')->group(function(){
        // Rute lainnya
        
        // Cetak PDF
        Route::get('downloadpdf', [RiwayatTransaksiPelangganController::class, 'downloadpdf'])->name('riwayattransaksipelanggan.downloadpdf');
    });
    Route::controller(RiwayatTransaksiKonsumenController::class)->prefix('riwayattransaksikonsumen')->group(function(){
        Route::get('', 'index')->name('riwayattransaksikonsumen');
        Route::get('tambah', 'tambah')->name('riwayattransaksikonsumen.tambah');
        Route::post('tambah', 'simpan')->name('riwayattransaksikonsumen.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('riwayattransaksikonsumen.edit');
        Route::post('edit/{id}', 'update')->name('riwayattransaksikonsumen.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('riwayattransaksikonsumen.hapus');
    });
    Route::controller(RiwayatTransaksiKonsumenController::class)->prefix('riwayattransaksikonsumen')->group(function(){
        // Rute lainnya
        
        // Cetak PDF
        Route::get('downloadpdf', [RiwayatTransaksiKonsumenController::class, 'downloadpdf'])->name('riwayattransaksikonsumen.downloadpdf');
    });
    Route::controller(TransaksiPenjualanController::class)->prefix('transaksipenjualan')->group(function(){
        Route::get('', 'index')->name('transaksipenjualan');
        Route::get('tambah', 'tambah')->name('transaksipenjualan.tambah');
        Route::post('tambah', 'simpan')->name('transaksipenjualan.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('transaksipenjualan.edit');
        Route::post('edit/{id}', 'update')->name('transaksipenjualan.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('transaksipenjualan.hapus');
    });
    Route::controller(TransaksiPenjualanController::class)->prefix('transaksipenjualan')->group(function(){
        // Rute lainnya
        
        // Cetak PDF
        Route::get('downloadpdf', [TransaksiPenjualanController::class, 'downloadpdf'])->name('transaksipenjualan.downloadpdf');
    });
    Route::controller(DistributorController::class)->prefix('distributor')->group(function(){
        Route::get('', 'index')->name('distributor');
        Route::get('tambah', 'tambah')->name('distributor.tambah');
        Route::post('tambah', 'simpan')->name('distributor.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('distributor.edit');
        Route::post('edit/{id}', 'update')->name('distributor.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('distributor.hapus');
    });
    Route::controller(DistributorController::class)->prefix('distributor')->group(function(){
        // Rute lainnya
        
        // Cetak PDF
        Route::get('downloadpdf', [DistributorController::class, 'downloadpdf'])->name('distributor.downloadpdf');
    });
    
    Route::controller(DataPoinController::class)->prefix('datapoin')->group(function(){
        Route::get('', 'index')->name('datapoin');
        Route::get('tambah', 'tambah')->name('datapoin.tambah');
        Route::post('tambah', 'simpan')->name('datapoin.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('datapoin.edit');
        Route::post('edit/{id}', 'update')->name('datapoin.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('datapoin.hapus');
    });
    Route::controller(DataPoinController::class)->prefix('datapoin')->group(function(){
        // Rute lainnya
        
        // Cetak PDF
        Route::get('downloadpdf', [DataPoinController::class, 'downloadpdf'])->name('datapoin.downloadpdf');
    });
    
    Route::controller(PenukaranPoinController::class)->prefix('penukaranpoin')->group(function(){
        Route::get('', 'index')->name('penukaranpoin');
        Route::get('tambah', 'tambah')->name('penukaranpoin.tambah');
        Route::post('tambah', 'simpan')->name('penukaranpoin.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('penukaranpoin.edit');
        Route::post('edit/{id}', 'update')->name('penukaranpoin.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('penukaranpoin.hapus');
    });
    Route::controller(PenukaranPoinController::class)->prefix('penukaranpoin')->group(function(){
        // Rute lainnya
        
        // Cetak PDF
        Route::get('downloadpdf', [PenukaranPoinController::class, 'downloadpdf'])->name('penukaranpoin.downloadpdf');
    });

    Route::controller(PegawaidanPenggunaController::class)->prefix('pegawaidanpengguna')->group(function(){
        Route::get('', 'index')->name('pegawaidanpengguna');
        Route::get('tambah', 'tambah')->name('pegawaidanpengguna.tambah');
        Route::post('tambah', 'simpan')->name('pegawaidanpengguna.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('pegawaidanpengguna.edit');
        Route::post('edit/{id}', 'update')->name('pegawaidanpengguna.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('pegawaidanpengguna.hapus');
    });
    
    //cetak pdf
    Route::get('/downloadpdf',[PegawaidanPenggunaController::class,'downloadpdf']);
});


