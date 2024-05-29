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
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang');
            $table->foreign('id_barang')->references('no')->on('barangs')->onDelete('cascade');
            $table->string('keperluan');
            $table->string('tgl_peminjaman');
            $table->string('tgl_pengembalian');
            $table->string('foto_pengembalian');
            $table->string('peminjam');
            $table->foreign('peminjam')->references('name')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tgl_delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
