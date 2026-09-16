<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\ProgramStudi;
use App\Models\Berita;
use App\Models\KalenderAkademik;
use App\Models\Kegiatan;
use App\Models\Pengumuman;


class DashboardController extends Controller
{

    public function index()
    {

        $jumlahBerita = Berita::count();

        $jumlahPengumuman = Pengumuman::count();

        $jumlahKalender = KalenderAkademik::count();

        $jumlahKegiatan = Kegiatan::count();


        // tambahan fakultas & prodi

        $jumlahFakultas = Fakultas::count();

        $jumlahProdi = ProgramStudi::count();



        return view('admin.dashboard', compact(

            'jumlahBerita',

            'jumlahPengumuman',

            'jumlahKalender',

            'jumlahKegiatan',

            'jumlahFakultas',

            'jumlahProdi'

        ));

    }

}