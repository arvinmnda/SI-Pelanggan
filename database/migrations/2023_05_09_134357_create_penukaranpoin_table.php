<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penukaranpoin', function (Blueprint $table) {
            $table->id();
            $table->string('kode_poin')->nullable();
            $table->string('jumlah_poin')->nullable();
            $table->string('nama_pelanggan')->nullable();
            $table->string('nama_konsumen')->nullable();
            $table->string('nama_barang_konsumen')->nullable();
            $table->string('nama_barang_pelanggan')->nullable();
            $table->date('tanggal_penukaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penukaranpoin');
    }
};
