<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;
use App\Models\Informasi;

Route::get('/', [InformasiController::class, 'index']);

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/informasi', function () {

    $informasi = Informasi::latest()->get();

    return view('informasi', compact('informasi'));
});

