<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\Admin\SongController as AdminSongController;
use App\Http\Controllers\Admin\AlbumController as AdminAlbumController;
use App\Http\Controllers\Admin\ArtistController as AdminArtistController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/login', [SessionController::class, 'show'])->name('session.show');

Route::post('/login', [SessionController::class, 'store'])->name('session.store');

Route::post('/search', [SessionController::class, 'search'])->name('session.search');

Route::post('/logout', [SessionController::class, 'destroy'])->name('session.destroy');

Route::get('/password/forget', [SessionController::class, 'showForgetPassword'])->name('session.forget');

Route::post('/password/forget', [SessionController::class, 'forgetPassword'])->name('session.forget');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/artist/{name}', [ArtistController::class, 'show'])->name('artist.show');

Route::post('/skip-next', [ArtistController::class, 'skipSong'])->name('skip.next');

Route::post('/skip-previous', [ArtistController::class, 'skipSong'])->name('skip.previous');

// Admin routes

Route::name('admin.')->prefix('admin')->middleware('admin')->group(function () {
    Route::get('/login', [SessionController::class, 'showAdmin'])->name('session.show')->withoutMiddleware('admin');
    Route::post('/login', [SessionController::class, 'storeAdmin'])->name('session.store')->withoutMiddleware('admin');
    Route::post('/logout', [SessionController::class, 'destroyAdmin'])->name('session.destroy');
    Route::get('', [AdminController::class, 'index'])->name('index');
    Route::post('/songs/pause-release/{song}', [AdminSongController::class, 'pauseRelease'])->name('songs.pauseRelease');

    Route::resources([
        'songs' => AdminSongController::class,
        'artists' => AdminArtistController::class,
        'albums' => AdminAlbumController::class
    ]);
});

