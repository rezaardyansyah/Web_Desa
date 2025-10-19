<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'Home'])->name('home');

//Berita
Route::get('/berita', [IndexController::class, 'Berita'])->name('berita');
Route::get('/berita-detail', [IndexController::class, 'DetailBerita'])->name('detail-berita');

// Profile
Route::get('/profile', [IndexController::class, 'Profile'])->name('profile');

// Infografis
Route::get('/infografis', [IndexController::class, 'Infografis'])->name('infografis');
Route::get('/penduduk', [IndexController::class, 'Penduduk'])->name('penduduk');
Route::get('/stunting', [IndexController::class, 'Stunting'])->name('stunting');
Route::get('/idm', [IndexController::class, 'IDM'])->name('idm');
Route::get('/apbdes', [IndexController::class, 'APBD'])->name('apbdes');
Route::get('/bansos', [IndexController::class, 'Bansos'])->name('bansos');

// PPID
Route::get('/lembaga', [IndexController::class, 'Lembaga'])->name('lembaga');
Route::get('/bumdes', [IndexController::class, 'Bumdes'])->name('bumdes');
Route::get('/karang-taruna', [IndexController::class, 'KarangTaruna'])->name('karang-taruna');
Route::get('/koperasi', [IndexController::class, 'koperasi'])->name('koperasi');
Route::get('/pkk', [IndexController::class, 'PKK'])->name('pkk');
Route::get('/rt', [IndexController::class, 'RT'])->name('rt');

// Lembaga
Route::get('/ppid', [IndexController::class, 'PPID'])->name('ppid');
Route::get('/pelayanan', [IndexController::class, 'Pelayanan'])->name('pelayanan');
Route::get('/struktur', [IndexController::class, 'Struktur'])->name('struktur');
Route::get('/tugas', [IndexController::class, 'Tugas'])->name('tugas');
Route::get('/visi-misi', [IndexController::class, 'VisiMisi'])->name('visi-misi');






