<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatTransaksiKonsumen extends Model
{
    use HasFactory;
    protected $table = 'riwayattransaksikonsumen';
    protected $fillable = ['id_transaksi', 'id_transaksi_penukaran_poin', 'nama_barang','total_harga', 'jumlah_barang'];
}
