<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheLoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('the_loais')->delete();

        DB::table('the_loais')->truncate();

        DB::table('the_loais')->insert([
            ['id' => 1, 'ten_the_loai' => 'Tiểu thuyết'],
            ['id' => 2, 'ten_the_loai' => 'Truyện ngắn'],
            ['id' => 3, 'ten_the_loai' => 'Học thuật'],
            ['id' => 4, 'ten_the_loai' => 'Tâm lý học'],
            ['id' => 5, 'ten_the_loai' => 'Khoa học viễn tưởng'],
            ['id' => 6, 'ten_the_loai' => 'Giả tưởng'],
            ['id' => 7, 'ten_the_loai' => 'Thiếu nhi'],
            ['id' => 8, 'ten_the_loai' => 'Lịch sử'],
            ['id' => 9, 'ten_the_loai' => 'Hồi ký'],
            ['id' => 10, 'ten_the_loai' => 'Kinh doanh'],
            ['id' => 11, 'ten_the_loai' => 'Triết học'],
            ['id' => 12, 'ten_the_loai' => 'Công nghệ'],
            ['id' => 13, 'ten_the_loai' => 'Thơ'],
            ['id' => 14, 'ten_the_loai' => 'Du lịch'],
            ['id' => 15, 'ten_the_loai' => 'Nghệ thuật'],
            ['id' => 16, 'ten_the_loai' => 'Văn hóa'],
            ['id' => 17, 'ten_the_loai' => 'Phim ảnh'],
            ['id' => 18, 'ten_the_loai' => 'Sức khỏe'],
            ['id' => 19, 'ten_the_loai' => 'Tôn giáo'],
            ['id' => 20, 'ten_the_loai' => 'Chính trị'],
        ]);
    }
}
