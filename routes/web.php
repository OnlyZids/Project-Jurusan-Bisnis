<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramStudiController; 
use App\Http\Controllers\PesanController;

// ini unutuk beranda bagian
Route::get('/', [ProgramStudiController::class, 'beranda'])->name('beranda');

// ini unutuk doseen bagian
Route::get('/dosen', [ProgramStudiController::class, 'dosen'])->name('dosen');
Route::get('/dosen/{id}', [ProgramStudiController::class, 'detailDosen'])->name('dosen.detail');


// ini unutuk prodi bagian
Route::get('/program-studi', [ProgramStudiController::class, 'prodi'])->name('prodi');
Route::get('/program-studi/{slug}', [ProgramStudiController::class, 'detailProdi'])->name('prodi.detail');

// ini untuk halaman staf dan fasilitas
Route::get('/staf', [ProgramStudiController::class, 'staf'])->name('staf');
// Tanda tanya (?) artinya parameter ini BOLEH KOSONG (kalo kosong berarti "Semua")
Route::get('/fasilitas/{kategori?}', [ProgramStudiController::class, 'fasilitas'])->name('fasilitas');

// ini untuk halaman akademik dengan parameter kategori opsional
Route::get('/akademik/read/{slug}', [ProgramStudiController::class, 'detailAkademik'])->name('akademik.detail');
Route::get('/akademik/{kategori?}', [ProgramStudiController::class, 'akademik'])->name('akademik');

// === ARTIKEL / BERITA ===
Route::get('/artikel', [ProgramStudiController::class, 'artikel'])->name('artikel');
Route::get('/artikel/{slug}', [ProgramStudiController::class, 'detailArtikel'])->name('artikel.detail');

// === PRESTASI ===
Route::get('/prestasi', [ProgramStudiController::class, 'prestasi'])->name('prestasi');
Route::get('/prestasi/{slug}', [ProgramStudiController::class, 'detailPrestasi'])->name('prestasi.detail');


// Route untuk kirim pesan
Route::post('/kirim-pesan', [PesanController::class, 'store'])->name('kirim.pesan');