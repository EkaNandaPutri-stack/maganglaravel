<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('informasi', function (Blueprint $table): void {
            if (! Schema::hasColumn('informasi', 'gambar')) {
                $table->string('gambar')->nullable()->after('kategori');
            }

            if (! Schema::hasColumn('informasi', 'penulis')) {
                $table->string('penulis')->nullable()->after('gambar');
            }

            if (! Schema::hasColumn('informasi', 'tanggal_publish')) {
                $table->date('tanggal_publish')->nullable()->after('penulis');
            }
        });
    }

    public function down(): void
    {
        Schema::table('informasi', function (Blueprint $table): void {
            foreach (['tanggal_publish', 'penulis', 'gambar'] as $column) {
                if (Schema::hasColumn('informasi', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
