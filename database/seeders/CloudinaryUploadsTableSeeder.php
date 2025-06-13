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
                'public_id' => 'jdapg5hp6osqk61jpir7',
                'url' => 'http://res.cloudinary.com/djdf56dfq/image/upload/v1749547936/jdapg5hp6osqk61jpir7.jpg',
                'created_at' => NULL,
                'updated_at' => '2025-06-10 16:32:17',
            ),
            1 => 
            array (
                'id' => 2,
                'public_id' => 'kmuuet8bww5j553hf1og',
                'url' => 'http://res.cloudinary.com/djdf56dfq/image/upload/v1749548445/kmuuet8bww5j553hf1og.jpg',
                'created_at' => NULL,
                'updated_at' => '2025-06-10 16:40:47',
            ),
            2 => 
            array (
                'id' => 3,
                'public_id' => 'ns9gz6o9knsxm0nciqyu',
                'url' => 'http://res.cloudinary.com/djdf56dfq/image/upload/v1749550663/ns9gz6o9knsxm0nciqyu.jpg',
                'created_at' => NULL,
                'updated_at' => '2025-06-10 17:17:46',
            ),
            3 => 
            array (
                'id' => 4,
                'public_id' => 'a2hapdsde0cxstfmvynv',
                'url' => 'http://res.cloudinary.com/djdf56dfq/image/upload/v1749548256/a2hapdsde0cxstfmvynv.jpg',
                'created_at' => NULL,
                'updated_at' => '2025-06-10 16:37:39',
            ),
            4 => 
            array (
                'id' => 5,
                'public_id' => 'thhhvmshu2bracu7uavs',
                'url' => 'http://res.cloudinary.com/djdf56dfq/image/upload/v1749551020/thhhvmshu2bracu7uavs.jpg',
                'created_at' => NULL,
                'updated_at' => '2025-06-10 17:23:43',
            ),
            5 => 
            array (
                'id' => 6,
                'public_id' => 'avnqukhxpbkui0rfauhu',
                'url' => 'http://res.cloudinary.com/djdf56dfq/image/upload/v1749551061/avnqukhxpbkui0rfauhu.jpg',
                'created_at' => NULL,
                'updated_at' => '2025-06-10 17:24:24',
            ),
            6 => 
            array (
                'id' => 7,
                'public_id' => 'vxm10z4jm4wfxepdzai6',
                'url' => 'http://res.cloudinary.com/djdf56dfq/image/upload/v1749616502/vxm10z4jm4wfxepdzai6.jpg',
                'created_at' => '2025-06-11 11:35:03',
                'updated_at' => '2025-06-11 11:35:03',
            ),
            7 => 
            array (
                'id' => 8,
                'public_id' => 'qvxqecn9rv4139y7raap',
                'url' => 'https://res.cloudinary.com/djdf56dfq/image/upload/v1749616342/qvxqecn9rv4139y7raap.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'public_id' => 'lvebf2jmlvqsesdjpufx',
                'url' => 'https://res.cloudinary.com/djdf56dfq/video/upload/v1749627927/lvebf2jmlvqsesdjpufx.mp3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'public_id' => 'soc7svnknl4xjv6bqlzs',
                'url' => 'https://res.cloudinary.com/djdf56dfq/image/upload/v1733206544/soc7svnknl4xjv6bqlzs.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}