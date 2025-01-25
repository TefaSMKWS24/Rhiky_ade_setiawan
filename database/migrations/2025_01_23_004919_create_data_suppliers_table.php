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
        Schema::create('data_supplier', function (Blueprint $table) {
            $table->string('kode_supplier', 6)->unique()->primary();
            $table->string('nama_supplier', 20);
            $table->string('nohp', 13);
            $table->string('kode_barang', 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_supplier');
    }
};
