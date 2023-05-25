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
    Schema::create('kamar', function (Blueprint $table) {
      $table->id();
      $table->string('kode_kamar')->unique();
      $table->integer('lantai');
      $table->boolean('kamar_mandi_dalam');
      $table->boolean('isBalkon');
      $table->boolean('isAC');
      $table->boolean('isWaterHeater');
      $table->boolean('isKingBed');
      $table->integer('harga');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('kamar');
  }
};