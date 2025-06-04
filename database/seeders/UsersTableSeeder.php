<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tăng Xuân Chiến',
                'email' => 'tangxuanchien511@gmail.com',
                'date_of_birth' => '2003-11-20',
                'email_notifications' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$12$BgJERebqBLlQMMyDymm1sOAj5bkkLmfS1.pYdDnTkWuAT0POv9cem',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}