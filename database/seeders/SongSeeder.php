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
                'artist_id' => 3,
                'name' => 'Có chắc yêu là đây',
                'source' => 'CÓ CHẮC YÊU LÀ ĐÂY.mp4',
                'image_url' => 'ccyld.jpg',
                'release_year' => 2020,
                'genre_id' => 1,
                'duration' => '3:35'
            ],
            [
                'id' => 3,
                'artist_id' => 3,
                'name' => 'Đừng làm trái tim anh đau',
                'source' => 'Đừng làm trái tim anh đau.mp4',
                'image_url' => 'dlttad.jpg',
                'release_year' => 2018,
                'genre_id' => 1,
                'duration' => '4:35'
            ],
            [
                'id' => 4,
                'artist_id' => 1,
                'name' => 'Tim Anh Ghen',
                'source' => 'TIM ANH GHEN.mp4',
                'image_url' => 'tag.jpg',
                'release_year' => 2024,
                'genre_id' => 2,
                'duration' => '4:39'
            ],
            [
                'id' => 20,
                'artist_id' => 3, // Sơn Tùng M-TP
                'name' => 'Hãy Trao Cho Anh',
                'source' => 'Hãy Trao Cho Anh.mp4',
                'image_url' => 'htca.jpg',
                'release_year' => 2019,
                'genre_id' => 1,
                'duration' => '4:00'
            ],
            [
                'id' => 21,
                'artist_id' => 3, // Sơn Tùng M-TP
                'name' => 'Chạy Ngay Đi',
                'source' => 'Chạy Ngay Đi.mp4',
                'image_url' => 'cnd.jpg',
                'release_year' => 2018,
                'genre_id' => 1,
                'duration' => '4:10'
            ],
            [
                'id' => 5,
                'artist_id' => 2, // Hòa Minzy
                'name' => 'Rời Bỏ',
                'source' => 'Rời Bỏ.mp4',
                'image_url' => 'roibo.jpg',
                'release_year' => 2017,
                'genre_id' => 1,
                'duration' => '4:20'
            ],
            [
                'id' => 6,
                'artist_id' => 2, // Hòa Minzy
                'name' => 'Không Thể Cùng Nhau Suốt Kiếp',
                'source' => 'Không Thể Cùng Nhau Suốt Kiếp.mp4',
                'image_url' => 'ktcnsk.jpg',
                'release_year' => 2020,
                'genre_id' => 1,
                'duration' => '5:00'
            ],
            [
                'id' => 7,
                'artist_id' => 2, // Hòa Minzy
                'name' => 'Bắc Bling',
                'source' => 'Bắc Bling.mp4',
                'image_url' => 'bb.jpg',
                'release_year' => 2018,
                'genre_id' => 1,
                'duration' => '4:30'
            ],
            [
                'id' => 8,
                'artist_id' => 4, // HIEUTHUHAI
                'name' => 'Cua',
                'source' => 'Cua.mp4',
                'image_url' => 'cua.jpg',
                'release_year' => 2020,
                'genre_id' => 2,
                'duration' => '3:15'
            ],
            [
                'id' => 9,
                'artist_id' => 4, // HIEUTHUHAI
                'name' => 'Không thể say',
                'source' => 'Không thể say.mp4',
                'image_url' => 'kts.jpg',
                'release_year' => 2021,
                'genre_id' => 2,
                'duration' => '3:20'
            ],
            [
                'id' => 10,
                'artist_id' => 4, // HIEUTHUHAI
                'name' => 'Ngủ một mình',
                'source' => 'Ngủ một mình.mp4',
                'image_url' => 'nmm.jpg',
                'release_year' => 2022,
                'genre_id' => 1,
                'duration' => '3:30'
            ],
            [
                'id' => 11,
                'artist_id' => 5, // AMEE
                'name' => 'Anh Nhà Ở Đâu Thế',
                'source' => 'Anh Nhà Ở Đâu Thế.mp4',
                'image_url' => 'anodt.jpg',
                'release_year' => 2019,
                'genre_id' => 1,
                'duration' => '3:40'
            ],
            [
                'id' => 12,
                'artist_id' => 5, // AMEE
                'name' => 'Đen Đá Không Đường',
                'source' => 'Đen Đá Không Đường.mp4',
                'image_url' => 'ddkd.jpg',
                'release_year' => 2020,
                'genre_id' => 1,
                'duration' => '3:30'
            ],
            [
                'id' => 13,
                'artist_id' => 5, // AMEE
                'name' => 'Sao Anh Chưa Về Nhà',
                'source' => 'Sao Anh Chưa Về Nhà.mp4',
                'image_url' => 'sacvn.jpg',
                'release_year' => 2021,
                'genre_id' => 1,
                'duration' => '3:45'
            ],
            [
                'id' => 14,
                'artist_id' => 6, // Chi Pu
                'name' => 'Anh Ơi Ở Lại',
                'source' => 'Anh Ơi Ở Lại.mp4',
                'image_url' => 'aol.jpg',
                'release_year' => 2019,
                'genre_id' => 1,
                'duration' => '4:00'
            ],
            [
                'id' => 15,
                'artist_id' => 6, // Chi Pu
                'name' => 'Từ Hôm Nay',
                'source' => 'Từ Hôm Nay.mp4',
                'image_url' => 'thn.jpg',
                'release_year' => 2017,
                'genre_id' => 1,
                'duration' => '3:40'
            ],
            [
                'id' => 16,
                'artist_id' => 6, // Chi Pu
                'name' => 'Đoá Hoa Hồng',
                'source' => 'Đoá Hoa Hồng.mp4',
                'image_url' => 'dhn.jpg',
                'release_year' => 2018,
                'genre_id' => 1,
                'duration' => '3:50'
            ],
            [
                'id' => 17,
                'artist_id' => 1, // Dangrangto
                'name' => 'Chẳng Thể Nói Ra',
                'source' => 'Chẳng Thể Nói Ra.mp4',
                'image_url' => 'ctnr.jpg',
                'release_year' => 2021,
                'genre_id' => 1,
                'duration' => '3:30'
            ],
            [
                'id' => 18,
                'artist_id' => 1, // Dangrangto
                'name' => 'Ngựa ô',
                'source' => 'Ngựa ô.mp4',
                'image_url' => 'no.jpg',
                'release_year' => 2020,
                'genre_id' => 2,
                'duration' => '3:15'
            ],
            [
                'id' => 19,
                'artist_id' => 1, // Dangrangto
                'name' => 'Trần Duy Hưng',
                'source' => 'Trần Duy Hưng.mp4',
                'image_url' => 'tdh.jpg',
                'release_year' => 2022,
                'genre_id' => 2,
                'duration' => '3:25'
            ],[
                'id' => 22,
                'artist_id' => 1, // Dangrangto
                'name' => 'Girl Hà Nội',
                'source' => 'Girl Hà Nội.mp4',
                'image_url' => 'ghn.jpg',
                'release_year' => 2022,
                'genre_id' => 2,
                'duration' => '3:25'
            ],
        ]);
    }
}
