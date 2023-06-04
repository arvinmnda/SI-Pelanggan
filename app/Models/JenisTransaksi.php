<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTransaksi extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'jenistransaksi';
    protected $fillable = ['kode_jenis_transaksi', 'nama_jenis_transaksi', 'id_konsumen','id_pelanggan'];
}
