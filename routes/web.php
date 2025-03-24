<?php

use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/artist', [ArtistController::class,'showArtist'])->name('artist.show');

// Route::get('', [ArtistController::class,
