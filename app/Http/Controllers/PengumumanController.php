<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest('tanggal')->get();

        return view('pengumuman', compact('pengumuman'));
    }
}
