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
            [
                'id' => '1',
                'slug' => 'dangrangto',
                'name' => 'Dangrangto',
                'followers' => 1000000,
                'monthly_listeners' => 1700000,
                'description' => '"Dangrangto" tên thật là Trần Hải Đăng,
                                là một rapper đa dạng phong cách đến từ tổ đội WORKAHOLICS và SIMPLEGUYS.
                                Một số nghệ danh khác mọi người vẫn hay gọi: DRT và Trần Lả Lướt.',
                'image_url' => 'dangrangto.jpg'
            ],
            [
                'id' => '2',
                'slug' => 'hoa-minzy',
                'name' => 'Hòa Minzy',
                'followers' => 1500000,
                'monthly_listeners' => 1800000,
                'description' => 'Hòa Minzy, tên thật Nguyễn Thị Hòa, sinh ngày 31/5/1995 tại Bắc Ninh,
                                là một ca sĩ, diễn viên và MC nổi tiếng của Việt Nam. Cô gây chú ý khi giành quán quân Học viện Ngôi sao 2014 và nhanh chóng khẳng định tên tuổi với hàng loạt bản hit như "Ăn gì đây", "Rời bỏ", và "Bắc Bling".
                                 Với giọng hát nội lực, phong cách trẻ trung và sự sáng tạo trong âm nhạc, Hòa Minzy đã trở thành một trong những nghệ sĩ được yêu thích nhất V-pop.',
                'image_url' => 'hoaminzy.jpg'
            ],
            [
                'id' => '3',
                'slug' => 'son-tung-mtp',
                'name' => 'Sơn Tùng MTP',
                'followers' => 5000000,
                'monthly_listeners' => 16000000,
                'description' => 'Nguyễn Thanh Tùng, sinh năm 1994, được biết đến với nghệ danh Sơn Tùng M-TP,
                                là một ca sĩ, nhạc sĩ, nhà sản xuất và diễn viên người Việt Nam.
                                Anh không chỉ được biết đến là một trong những nghệ sĩ Việt Nam thành công nhất và là "Hoàng tử V-pop",
                                mà còn là Chủ tịch của ba công ty tự thành lập: M-TP Entertainment, M-TP Talent và M-TP & Friends.',
                'image_url' => 'sontung.jpg'
            ],
            [
                'id' => '4',
                'slug' => 'hieuthuhai',
                'name' => 'HIEUTHUHAI',
                'followers' => 975000,
                'monthly_listeners' => 1500000,
                'description' => '"HIEUTHUHAI" tên thật là Trần Minh Hiếu,
                                  là một rapper và ca sĩ sáng tác nhạc nổi tiếng người Việt Nam,
                                  thành viên của nhóm Gerdnang. Anh được biết đến qua chương trình King of Rap
                                  và 2 Ngày 1 Đêm, với phong cách trẻ trung, hiện đại và gần gũi Gen Z.',
                'image_url' => 'hieuthuhai.jpg'
            ],
            [
                'id' => '5',
                'slug' => 'amee',
                'name' => 'AMEE',
                'followers' => 600000,
                'monthly_listeners' => 2000000,
                'description' => '"AMEE" tên thật là Trần Huyền My,
                                  là một ca sĩ trẻ nổi bật của V-pop với phong cách ngọt ngào, dễ thương.
                                  Cô được biết đến qua các bản hit như "Đen Đá Không Đường" và "Anh Nhà Ở Đâu Thế",
                                  mang âm hưởng hiện đại và tươi sáng.',
                'image_url' => 'amee.jpg'
            ],
            [
                'id' => '6',
                'slug' => 'chi-pu',
                'name' => 'Chi Pu',
                'followers' => 5500000,
                'monthly_listeners' => 1200000,
                'description' => '"Chi Pu" tên thật là Nguyễn Thùy Chi,
                                  là một ca sĩ, diễn viên và người mẫu nổi tiếng tại Việt Nam.
                                  Từ một hot girl, cô chuyển mình thành nghệ sĩ đa năng với các sản phẩm âm nhạc
                                  như "Từ Hôm Nay" và "Anh Ơi Ở Lại", gây chú ý bởi sự lột xác ấn tượng.',
                'image_url' => 'chipu.jpg'
            ]
        ]);
    }
}
