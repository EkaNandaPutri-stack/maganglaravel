<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Kegiatan;

class InformasiController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function informasi()
    {
        $berita = Berita::latest('tanggal')
            ->get()
            ->each(function ($item) {
                $item->kategori = 'berita';
                $item->judul = $item->judul;
                $item->tanggal_publish = $item->tanggal;
            });

        $pengumuman = Pengumuman::latest('tanggal')
            ->get()
            ->each(function ($item) {
                $item->kategori = 'pengumuman';
                $item->judul = $item->judul;
                $item->tanggal_publish = $item->tanggal;
            });

        $kegiatan = Kegiatan::latest('tanggal')
            ->get()
            ->each(function ($item) {
                $item->kategori = 'kegiatan';
                $item->judul = $item->nama_kegiatan;
                $item->tanggal_publish = $item->tanggal;
            });

        $informasi = collect()
            ->merge($berita)
            ->merge($pengumuman)
            ->merge($kegiatan)
            ->sortByDesc('tanggal_publish')
            ->values();

        return view('informasi', compact('informasi'));
    }
}