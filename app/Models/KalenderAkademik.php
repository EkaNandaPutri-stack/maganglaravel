<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KalenderAkademik extends Model
{

    protected $table = 'kalender_akademik';


    protected $fillable = [

        'kegiatan',

        'semester_genap',

        'tahun_akademik',

        'semester_gasal',

        'urutan',

        'aktif'

    ];



    protected $casts = [

        'aktif' => 'boolean'

    ];

}