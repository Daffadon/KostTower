<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('log_transaksi', function (Blueprint $table) {
            $table->string('kode_kamar');
            $table->string('nik');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->foreign('kode_kamar')->references('kode_kamar')->on('kamar')->onDelete('cascade');
            $table->foreign('nik')->references('nik')->on('penyewa')->onDelete('cascade');
            $table->timestamps();
            $table->primary(['kode_kamar', 'nik', 'tanggal_masuk']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_transaksi');
    }
};