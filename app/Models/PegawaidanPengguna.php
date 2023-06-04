<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaidanPengguna extends Model
{
    use HasFactory;
    protected $table = 'pegawaidanpengguna';
    protected $fillable = ['id_pegawai', 'nama_pengguna', 'nama_pegawai','jabatan_pegawai', 'no_telepon_pegawai', 'email_pengguna', 'email_pegawai'];
}
