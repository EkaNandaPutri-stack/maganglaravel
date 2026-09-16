<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\InformasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KegiatanController;

use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\PengumumanController as AdminPengumumanController;
use App\Http\Controllers\Admin\KegiatanController as AdminKegiatanController;
use App\Http\Controllers\Admin\FakultasController as AdminFakultasController;
use App\Http\Controllers\Admin\ProgramStudiController as AdminProgramStudiController;
use App\Http\Controllers\Admin\PasswordController;

use App\Models\ProgramStudi;


/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/login',
    [AdminAuthController::class,'showLogin']
)->name('admin.login');


Route::post('/admin/login',
    [AdminAuthController::class,'login']
)->name('admin.login.process');



/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/


Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function(){


        Route::get('/dashboard',
            [DashboardController::class,'index']
        )->name('dashboard');



        Route::post('/logout',
            [AdminAuthController::class,'logout']
        )->name('logout');



        /*
        |--------------------------------------------------------------------------
        | DATA WEBSITE
        |--------------------------------------------------------------------------
        */


        Route::resource('berita',
            AdminBeritaController::class
        )->except(['show']);



        Route::resource('pengumuman',
            AdminPengumumanController::class
        )->except(['show']);



        Route::resource('kegiatan',
            AdminKegiatanController::class
        )->except(['show']);



        Route::resource('fakultas',
            AdminFakultasController::class
        )->except(['show']);



        Route::resource('program-studi',
            AdminProgramStudiController::class
        )->except(['show']);




        /*
        |--------------------------------------------------------------------------
        | PROFILE
        |--------------------------------------------------------------------------
        */


        Route::get('/profile',function(){

            return view('admin.profile');

        })->name('profile');



        Route::get('/password',function(){

            return view('admin.password');

        })->name('password');



        Route::post('/password/update',
            [PasswordController::class,'update']
        )->name('password.update');


    });





/*
|--------------------------------------------------------------------------
| PUBLIC WEBSITE
|--------------------------------------------------------------------------
*/


Route::get('/',
    [InformasiController::class,'index']
)->name('beranda');



/*
|--------------------------------------------------------------------------
| TENTANG
|--------------------------------------------------------------------------
*/

Route::get('/tentang',function(){

    return view('tentang');

})->name('tentang');





Route::get('/informasi',
    [InformasiController::class,'informasi']
)->name('informasi');





Route::get('/program-studi',function(){


    $programStudis = ProgramStudi::with('fakultas')
        ->orderBy('fakultas_id')
        ->orderBy('nama_prodi')
        ->get();


    return view(
        'program-studi',
        compact('programStudis')
    );


})->name('program.studi');





Route::get('/berita',
    [BeritaController::class,'index']
)->name('berita');



Route::get('/berita/{berita}',
    [BeritaController::class,'show']
)->name('berita.show');





Route::get('/pengumuman',
    [PengumumanController::class,'index']
)->name('pengumuman');





Route::get('/kegiatan',
    [KegiatanController::class,'index']
)->name('kegiatan');