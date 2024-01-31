<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;


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

Route::get('/', function () {
    return view('user.homepage');
});

Route::get('/admin-homepage', function () {
    return view('admin.admin-homepage');
});

Route::get('/admin-berita', [BeritaController::class, 'index'])->name('admin-berita');
Route::get('/admin-berita/create', [BeritaController::class, 'create'])->name('admin-berita.create');
Route::post('/admin-berita', [BeritaController::class, 'store'])->name('admin-berita.store');
Route::get('/admin-berita/{berita}', [BeritaController::class, 'show'])->name('admin-berita.show');
Route::get('/admin-berita/{berita}/edit', [BeritaController::class, 'edit'])->name('admin-berita.edit');
Route::put('/admin-berita/{berita}', [BeritaController::class, 'update'])->name('admin-berita.update');
Route::delete('/admin-berita/{berita}', [BeritaController::class, 'destroy'])->name('admin-berita.destroy');


Route::get('/admin-panitia', function () {
    return view('admin.panitia.index');
});
