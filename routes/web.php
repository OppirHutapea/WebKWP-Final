<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PanitiaController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class, 'index'])->name('user-homepage');


Route::get('/admin-homepage', function () {
    return view('admin.admin-homepage');
});

//berita
Route::get('/admin-berita', [BeritaController::class, 'index'])->name('admin-berita');
Route::get('/admin-berita/create', [BeritaController::class, 'create'])->name('admin-berita.create');
Route::post('/admin-berita', [BeritaController::class, 'store'])->name('admin-berita.store');
Route::get('/admin-berita/{berita}', [BeritaController::class, 'show'])->name('admin-berita.show');
Route::get('/admin-berita/{berita}/edit', [BeritaController::class, 'edit'])->name('admin-berita.edit');
Route::put('/admin-berita/{berita}', [BeritaController::class, 'update'])->name('admin-berita.update');
Route::delete('/admin-berita/{berita}', [BeritaController::class, 'destroy'])->name('admin-berita.destroy');

//panitia
Route::get('/admin-panitia', [PanitiaController::class, 'index'])->name('admin-panitia');
Route::get('/admin/panitia/create', [PanitiaController::class, 'create'])->name('admin.panitia.create');
Route::post('/admin/panitia', [PanitiaController::class, 'store'])->name('admin.panitia.store');
Route::get('/admin-panitia/{panitia}', [PanitiaController::class, 'show'])->name('admin-panitia.show');
Route::get('/admin/panitia/{panitia}/edit', [PanitiaController::class, 'edit'])->name('admin.panitia.edit');
Route::put('/admin/panitia/{panitia}', [PanitiaController::class, 'update'])->name('admin.panitia.update');
Route::delete('/admin/panitia/{panitia}', [PanitiaController::class, 'destroy'])->name('admin.panitia.destroy');

//galeri
Route::get('/galeri',[GaleriController::class, 'index'])->name('galeri');

//dokumen
Route::get('/admin-dokumen', [DokumenController::class, 'index'])->name('documents.index');
Route::post('/documents', [DokumenController::class, 'store'])->name('documents.store');
Route::delete('/documents/{id}', [DokumenController::class, 'destroy'])->name('documents.destroy');

//download dokumen
Route::get('/download-dokumen', [DokumenController::class, 'downloadDokumen'])->name('download.dokumen');


