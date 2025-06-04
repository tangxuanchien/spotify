<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ArtistsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(SongsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
