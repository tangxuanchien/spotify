<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/artist/{name}', [ArtistController::class,'show'])->name('artist.show');

