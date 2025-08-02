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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('alamat')->nullable(); // nullable untuk API
            $table->string('no_hp', 15);
            $table->decimal('harga_produk',);
            $table->decimal('stok_gabah',);
            $table->string('image_produk'); // wajib
            $table->string('image_ktp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
