<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgramStudi extends Model
{
    protected $table = 'program_studis';

    protected $fillable = [
        'fakultas_id',
        'nama_prodi',
        'kuota_mahasiswa',
        'jumlah_kelas',
    ];

    protected $casts = [
        'kuota_mahasiswa' => 'integer',
        'jumlah_kelas' => 'integer',
    ];

    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
}