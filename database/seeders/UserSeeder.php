<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;
use function Symfony\Component\Clock\now;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Tăng Xuân Chiến',
                'email' => 'tangxuanchien511@gmail.com',
                'email_notifications' => '0',
                'date_of_birth' => '2003-11-20',
                'password' => Hash::make(123456),
            ]
        ]);
    }
}
