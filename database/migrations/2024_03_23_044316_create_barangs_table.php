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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('pemilik');
            $table->foreign('pemilik')->references('name')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jenis');
            $table->string('no')->unique();
            $table->string('nama');
            $table->string('status');
            $table->string('foto');
            $table->string('peminjam')->nullable();
            $table->foreign('peminjam')->references('name')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
