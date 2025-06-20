<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('songs')->delete();
        
        \DB::table('songs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'artist_id' => 3,
                'cloudinary_upload_id' => 10,
                'cloudinary_source_id' => 9,
                'name' => 'Muộn rồi mà sao còn',
                'release_year' => '2018',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '4:35',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'artist_id' => 3,
                'cloudinary_upload_id' => 11,
                'cloudinary_source_id' => 12,
                'name' => 'Có chắc yêu là đây',
                'release_year' => '2020',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '3:35',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => '2025-06-12 10:09:40',
            ),
            2 => 
            array (
                'id' => 3,
                'artist_id' => 3,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Đừng làm trái tim anh đau',
                'release_year' => '2018',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '4:35',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'artist_id' => 1,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Tim Anh Ghen',
                'release_year' => '2024',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 2,
                'duration' => '4:39',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'artist_id' => 2,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Bắc Bling',
                'release_year' => '2018',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '4:30',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'artist_id' => 4,
                'cloudinary_upload_id' => 14,
                'cloudinary_source_id' => 13,
                'name' => 'Cua',
                'release_year' => '2020',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 2,
                'duration' => '3:13',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => '2025-06-12 10:15:54',
            ),
            6 => 
            array (
                'id' => 9,
                'artist_id' => 4,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Không thể say',
                'release_year' => '2021',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 2,
                'duration' => '3:20',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'artist_id' => 4,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Ngủ một mình',
                'release_year' => '2022',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '3:30',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'artist_id' => 5,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Anh Nhà Ở Đâu Thế',
                'release_year' => '2019',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '3:40',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'artist_id' => 5,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Đen Đá Không Đường',
                'release_year' => '2020',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '3:30',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'artist_id' => 5,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Sao Anh Chưa Về Nhà',
                'release_year' => '2021',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '3:45',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'artist_id' => 6,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Anh Ơi Ở Lại',
                'release_year' => '2019',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '4:00',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 16,
                'artist_id' => 6,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Đoá Hoa Hồng',
                'release_year' => '2018',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '3:50',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 17,
                'artist_id' => 1,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Chẳng Thể Nói Ra',
                'release_year' => '2021',
                'status' => 'scheduled',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '3:30',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 18,
                'artist_id' => 1,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 15,
                'name' => 'Ngựa ô',
                'release_year' => '2020',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 2,
                'duration' => '3:15',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 19,
                'artist_id' => 1,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Trần Duy Hưng',
                'release_year' => '2022',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 2,
                'duration' => '3:25',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 20,
                'artist_id' => 3,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Hãy Trao Cho Anh',
                'release_year' => '2019',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '4:00',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 21,
                'artist_id' => 3,
                'cloudinary_upload_id' => 1,
                'cloudinary_source_id' => 1,
                'name' => 'Chạy Ngay Đi',
                'release_year' => '2018',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 1,
                'duration' => '4:10',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 22,
                'artist_id' => 1,
                'cloudinary_upload_id' => 8,
                'cloudinary_source_id' => 1,
                'name' => 'Girl Hà Nội',
                'release_year' => '2022',
                'status' => 'active',
                'likes' => 0,
                'listens' => 0,
                'genre_id' => 2,
                'duration' => '3:25',
                'lyrics' => NULL,
                'description' => NULL,
                'tags' => NULL,
                'created_at' => '2024-10-25 16:37:26',
                'updated_at' => '2024-10-31 16:20:26',
            ),
            19 => 
            array (
                'id' => 23,
                'artist_id' => 7,
                'cloudinary_upload_id' => 18,
                'cloudinary_source_id' => 19,
                'name' => 'USO',
                'release_year' => '2025',
                'status' => 'draft',
                'likes' => 120,
                'listens' => 123325,
                'genre_id' => 1,
                'duration' => '3:32',
                'lyrics' => 'Không có lời bài hát',
                'description' => NULL,
                'tags' => NULL,
                'created_at' => '2025-06-13 08:44:42',
                'updated_at' => '2025-06-13 10:47:46',
            ),
        ));
        
        
    }
}