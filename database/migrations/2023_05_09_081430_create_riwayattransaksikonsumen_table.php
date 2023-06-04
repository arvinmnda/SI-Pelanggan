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
        Schema::create('riwayattransaksikonsumen', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi')->nullable();
            $table->string('id_transaksi_penukaran_poin')->nullable();
            $table->string('nama_barang')->nullable();
            $table->integer('total_harga')->nullable();
            $table->integer('jumlah_barang')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayattransaksikonsumen');
    }
};
