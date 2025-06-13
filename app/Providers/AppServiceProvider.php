<?php

namespace App\Providers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paginate with Bootstrap
        Paginator::useBootstrapFive();

        // Share data admin view
        View::composer('layouts.admin.sidebar', function ($view){
            $view->with([
                'total_songs' => Song::count(),
                'total_users' => User::count(),
                'total_albums' => Album::count(),
                'total_artists' => Artist::count()
            ]);
        });
    }
}
