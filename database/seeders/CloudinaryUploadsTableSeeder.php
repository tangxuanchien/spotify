<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CloudinaryUploadsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cloudinary_uploads')->delete();
        
        \DB::table('cloudinary_uploads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'public_id' => 'sadsadsads',
                'url' => 'sdsadsadsadsa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}