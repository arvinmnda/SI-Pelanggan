<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenukaranPoin extends Model
{
    use HasFactory;
    protected $table = 'penukaranpoin';
    protected $fillable = ['kode_poin', 'jumlah_poin', 'nama_pelanggan','nama_konsumen', 'nama_barang_konsumen','nama_barang_pelanggan', 'tanggal_penukaran'];
}
