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
        Schema::create('program_studis', function (Blueprint $table) {
            $table->id();

            // Hubungan dengan tabel fakultas
            $table->foreignId('fakultas_id')
                ->constrained('fakultas')
                ->cascadeOnDelete();

            // Data program studi
            $table->string('nama_prodi');

            // Kuota mahasiswa
            $table->integer('kuota_mahasiswa');

            // Jumlah kelas
            $table->integer('jumlah_kelas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_studis');
    }
};
