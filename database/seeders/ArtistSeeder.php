<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artist::factory()->create([
            'name' => 'Tang Xuan Chien',
            'email' => 'chien@gmail.com',
            'password'=> Hash::make('123456'),
        ]);
    }
}
