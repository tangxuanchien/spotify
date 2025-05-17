<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/login', [LoginController::class, 'show'])->name('login.show');

Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/artist/{name}', [ArtistController::class,'show'])->name('artist.show');

Route::post('/skip-next', [ArtistController::class,'skipSong'])->name('skip.next');

Route::post('/skip-previous', [ArtistController::class,'skipSong'])->name('skip.previous');

