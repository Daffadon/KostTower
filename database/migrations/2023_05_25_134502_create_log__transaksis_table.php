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
            $table->id();
            $table->string('kode_kamar');
            $table->string('nik');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->boolean('status_pembayaran')->default(0);
            $table->foreign('kode_kamar')->references('kode_kamar')->on('kamar')->onDelete('cascade');
            $table->foreign('nik')->references('nik')->on('penyewa')->onDelete('cascade');
            $table->unique(['nik', 'kode_kamar', 'tanggal_masuk']);
            $table->timestamps();
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