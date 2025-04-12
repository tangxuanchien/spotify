<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("songs")->insert([
            [
                'id' => 1,
                'artist_id' => 3,
                'name' => 'Muộn rồi mà sao còn',
                'source' => 'Muộn Rồi Mà Sao Còn.mp4',
                'image_url' => 'mrmsc.jpg',
                'release_year' => 2018,
                'genre_id' => 1,
                'duration' => '4:35'
            ],
            [
                'id' => 2,
                'artist_id' => 1,
                'name' => 'Tim Anh Ghen',
                'source' => 'TIM ANH GHEN.mp4',
                'image_url' => 'tag.jpg',
                'release_year' => 2024,
                'genre_id' => 2,
                'duration' => '4:39'
            ]
        ]);
    }
}
