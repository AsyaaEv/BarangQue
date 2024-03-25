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
        Schema::create('type_users', function (Blueprint $table) {
            $table->id();
            $table->string('type')->unique();
            $table->string('kelas')->nullable();
            $table->string('absen')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('jurusan_guru')->nullable();
            $table->string('type_guru')->nullable();
            $table->string('mapel')->nullable();
            $table->string('kode')->nullable();
            $table->string('posisi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_users');
    }
};
