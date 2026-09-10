<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('informasi', function (Blueprint $table) {
            $table->string('kategori')
                ->default('berita')
                ->after('isi');
        });
    }

    public function down(): void
    {
        Schema::table('informasi', function (Blueprint $table) {
            $table->dropColumn('kategori');
        });
    }
};
