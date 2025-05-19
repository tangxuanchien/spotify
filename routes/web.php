<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/login', [SessionController::class, 'show'])->name('session.show');

Route::post('/login', [SessionController::class, 'store'])->name('session.store');

Route::post('/logout', [SessionController::class, 'destroy'])->name('session.destroy');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/artist/{name}', [ArtistController::class,'show'])->name('artist.show');

Route::post('/skip-next', [ArtistController::class,'skipSong'])->name('skip.next');

Route::post('/skip-previous', [ArtistController::class,'skipSong'])->name('skip.previous');

