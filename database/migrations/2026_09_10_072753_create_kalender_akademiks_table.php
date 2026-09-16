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
    Schema::create('kalender_akademik', function (Blueprint $table) {

        $table->id();

        // Nama agenda
        $table->string('kegiatan');

        // Tahun akademik
        $table->string('tahun_akademik');

        // Semester
        $table->enum('semester', [
            'Ganjil',
            'Genap',
            'Libur'
        ]);

        // Periode tanggal
        $table->date('tanggal_mulai');

        $table->date('tanggal_selesai')
              ->nullable();

        // Keterangan
        $table->text('keterangan')
              ->nullable();

        // Tampil atau tidak
        $table->boolean('aktif')
              ->default(true);

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kalender_akademik');
    }
};
