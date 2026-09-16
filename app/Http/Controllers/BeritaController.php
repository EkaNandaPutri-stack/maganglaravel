<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest('tanggal')->get();

        return view('berita', compact('berita'));
    }
}
