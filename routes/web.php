<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'Home'])->name('home');

Route::get('/news', [IndexController::class, 'News'])->name('berita');
Route::get('/news-detail', [IndexController::class, 'DetailsNews'])->name('detail-berita');

Route::get('/profile', [IndexController::class, 'Profile'])->name('profile');

Route::get('/infografis', [IndexController::class, 'Infografis'])->name('infografis');





