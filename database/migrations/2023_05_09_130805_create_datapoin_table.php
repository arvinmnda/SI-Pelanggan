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
        Schema::create('datapoin', function (Blueprint $table) {
            $table->id();
            $table->string('kode_poin')->nullable();
            $table->integer('jumlah_poin')->nullable();
            $table->string('nama_konsumen')->nullable();
            $table->string('nama_pelanggan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapoin');
    }
};
