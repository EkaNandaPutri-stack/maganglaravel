<?php

use App\Http\Controllers\InformasiController;
use App\Models\Informasi;
use Illuminate\Support\Facades\Route;


// =========================
// BERANDA
// =========================

Route::get('/', [InformasiController::class, 'index'])
    ->name('beranda');



// =========================
// TENTANG
// =========================

Route::get('/tentang', function () {

    return view('tentang');

});



// =========================
// INFORMASI
// =========================

Route::get('/informasi', function () {

    $informasi = Informasi::latest()->get();

    return view('informasi', compact('informasi'));

});



// =========================
// PROGRAM STUDI
// =========================

Route::get('/program-studi', function () {

    return view('program-studi');

})->name('program.studi');