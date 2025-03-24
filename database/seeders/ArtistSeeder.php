<?php

namespace Database\Seeders;

use App\Models\Artist;
use DB;
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
        DB::table('artists')->insert([
            ['name' => 'Dangrangto','description' => 'Rapper trẻ đang lên của Rap Việt', 'image_url'=> 'drt.img'],
            ['name' => 'Hòa Minzy','description' => 'Rapper trẻ đang lên của Rap Việt', 'image_url'=> 'drt.img'],
            ['name' => 'Sơn Tùng MTP','description' => 'Rapper trẻ đang lên của Rap Việt', 'image_url'=> 'drt.img']
        ]);
    }
}
