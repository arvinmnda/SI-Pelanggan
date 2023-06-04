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
        Schema::create('pegawaidanpengguna', function (Blueprint $table) {
            $table->id();
            $table->string('id_pegawai')->nullable();
            $table->string('nama_pengguna')->nullable();
            $table->string('nama_pegawai')->nullable();
            $table->string('jabatan_pegawai')->nullable();
            $table->string('no_telepon_pegawai')->nullable();
            $table->string('email_pengguna')->nullable();
            $table->string('email_pegawai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawaidanpengguna');
    }
};
