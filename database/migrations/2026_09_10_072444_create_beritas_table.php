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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();

            // Judul berita
            $table->string('judul');

            // Isi berita
            $table->text('isi');

            // Gambar berita
            $table->string('gambar')->nullable();

            // Tanggal berita
            $table->date('tanggal');

            // Nama penulis
            $table->string('penulis')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
