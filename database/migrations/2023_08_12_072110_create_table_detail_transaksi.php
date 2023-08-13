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
    Schema::create('table_detail_transaksi', function (Blueprint $table) {
      $table->id();
      $table->string('Transaksi_ID');
      $table->string('NamaValas');
      $table->string('Rate');
      $table->string('Qty');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('table_detail_transaksi');
  }
};
