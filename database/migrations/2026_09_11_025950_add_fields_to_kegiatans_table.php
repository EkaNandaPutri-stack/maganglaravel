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
        Schema::table('kegiatans', function (Blueprint $table) {
            $table->string('nama_kegiatan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('gambar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kegiatans', function (Blueprint $table) {
            $table->dropColumn([
                'nama_kegiatan',
                'deskripsi',
                'tanggal',
                'lokasi',
                'gambar',
            ]);
        });
    }
};
