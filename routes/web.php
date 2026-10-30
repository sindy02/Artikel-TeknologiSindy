<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;

Route::get('/', [HomeController::class, 'index'])
    ->name('beranda');

Route::get('/artikel', [ArtikelController::class, 'index'])
    ->name('artikel.index');

Route::get('/artikel/{id}', [ArtikelController::class, 'detail'])
    ->whereNumber('id')
    ->name('artikel.detail');

Route::get('/kategori', [ArtikelController::class, 'kategori'])
    ->name('kategori');

Route::get('/tentang', [HomeController::class, 'tentang'])
    ->name('tentang');