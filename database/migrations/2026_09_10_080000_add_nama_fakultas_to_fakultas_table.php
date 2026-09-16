<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('fakultas', 'nama_fakultas')) {
            Schema::table('fakultas', function (Blueprint $table): void {
                $table->string('nama_fakultas')->after('id');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('fakultas', 'nama_fakultas')) {
            Schema::table('fakultas', function (Blueprint $table): void {
                $table->dropColumn('nama_fakultas');
            });
        }
    }
};
