<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPenjualan extends Model
{
    use HasFactory;
    protected $table = 'transaksipenjualan';
    protected $fillable = ['id_transaksi', 'tanggal_transaksi', 'nama_barang','harga','total_harga', 'jumlah_barang'];
}
