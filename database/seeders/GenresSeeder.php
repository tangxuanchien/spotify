<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'id' => 1,
                'name' => 'Pop'
            ],
            [
                'id' => 2,
                'name' => 'Rap'
            ]
        ]);
    }
}
