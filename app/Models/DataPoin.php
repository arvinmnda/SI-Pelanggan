<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPoin extends Model
{
    use HasFactory;
    protected $table = 'datapoin';
    protected $fillable = ['kode_poin', 'jumlah_poin', 'nama_konsumen', 'nama_pelanggan'];
}
