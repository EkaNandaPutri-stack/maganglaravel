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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();

            // Nama kegiatan
            $table->string('nama_kegiatan');

            // Deskripsi kegiatan
            $table->text('deskripsi')->nullable();

            // Tanggal kegiatan
            $table->date('tanggal');

            // Lokasi kegiatan
            $table->string('lokasi')->nullable();

            // Gambar kegiatan
            $table->string('gambar')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
