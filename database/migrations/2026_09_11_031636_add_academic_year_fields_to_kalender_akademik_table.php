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
        Schema::table('kalender_akademik', function (Blueprint $table) {
            $table->string('tahun_akademik')->default('2026/2027')->after('kegiatan');
            $table->string('semester')->default('Ganjil')->after('tahun_akademik');
            $table->boolean('aktif')->default(true)->after('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kalender_akademik', function (Blueprint $table) {
            $table->dropColumn(['tahun_akademik', 'semester', 'aktif']);
        });
    }
};
