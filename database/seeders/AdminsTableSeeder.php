<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$12$BgJERebqBLlQMMyDymm1sOAj5bkkLmfS1.pYdDnTkWuAT0POv9cem',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}