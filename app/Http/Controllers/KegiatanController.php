<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;

class KegiatanController extends Controller
{

    public function index()
    {

        $kegiatan = Kegiatan::latest('tanggal')
            ->get();


        return view(
            'kegiatan',
            compact('kegiatan')
        );

    }

}