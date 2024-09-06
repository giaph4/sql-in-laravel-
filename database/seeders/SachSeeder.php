<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sachs')->delete();

        DB::table('sachs')->truncate();

        DB::table('sachs')->insert([
            ['id' => 1, 'ten_sach' => 'Harry Potter', 'hinh_anh' => 'xxx', 'gia_ban' => 150000, 'id_the_loai' => 5, 'id_tac_gia' => 2, 'id_nha_xuat_ban' => 1, 'so_luong_ton' => 100],
            ['id' => 2, 'ten_sach' => 'Đắc Nhân Tâm', 'hinh_anh' => 'xxx', 'gia_ban' => 120000, 'id_the_loai' => 4, 'id_tac_gia' => 4, 'id_nha_xuat_ban' => 5, 'so_luong_ton' => 80],
            ['id' => 3, 'ten_sach' => 'Lược sử thời gian', 'hinh_anh' => 'xxx', 'gia_ban' => 200000, 'id_the_loai' => 6, 'id_tac_gia' => 5, 'id_nha_xuat_ban' => 3, 'so_luong_ton' => 90],
            ['id' => 4, 'ten_sach' => 'Mật mã Da Vinci', 'hinh_anh' => 'xxx', 'gia_ban' => 175000, 'id_the_loai' => 6, 'id_tac_gia' => 7, 'id_nha_xuat_ban' => 4, 'so_luong_ton' => 75],
            ['id' => 5, 'ten_sach' => 'Nhà giả kim', 'hinh_anh' => 'xxx', 'gia_ban' => 160000, 'id_the_loai' => 1, 'id_tac_gia' => 4, 'id_nha_xuat_ban' => 1, 'so_luong_ton' => 100],
            ['id' => 6, 'ten_sach' => '1984', 'hinh_anh' => 'xxx', 'gia_ban' => 140000, 'id_the_loai' => 8, 'id_tac_gia' => 5, 'id_nha_xuat_ban' => 9, 'so_luong_ton' => 40],
            ['id' => 7, 'ten_sach' => 'Chúa tể những chiếc nhẫn', 'hinh_anh' => 'xxx', 'gia_ban' => 180000, 'id_the_loai' => 6, 'id_tac_gia' => 16, 'id_nha_xuat_ban' => 2, 'so_luong_ton' => 60],
            ['id' => 8, 'ten_sach' => 'Hành trình của linh hồn', 'hinh_anh' => 'xxx', 'gia_ban' => 190000, 'id_the_loai' => 19, 'id_tac_gia' => 18, 'id_nha_xuat_ban' => 7, 'so_luong_ton' => 50],
            ['id' => 9, 'ten_sach' => 'Hồi ức của một geisha', 'hinh_anh' => 'xxx', 'gia_ban' => 165000, 'id_the_loai' => 9, 'id_tac_gia' => 19, 'id_nha_xuat_ban' => 8, 'so_luong_ton' => 55],
            ['id' => 10, 'ten_sach' => 'Kiêu Hãnh và Định Kiến', 'hinh_anh' => 'xxx', 'gia_ban' => 170000, 'id_the_loai' => 1, 'id_tac_gia' => 10, 'id_nha_xuat_ban' => 9, 'so_luong_ton' => 90],
            ['id' => 11, 'ten_sach' => 'Bố già', 'hinh_anh' => 'xxx', 'gia_ban' => 200000, 'id_the_loai' => 1, 'id_tac_gia' => 11, 'id_nha_xuat_ban' => 10, 'so_luong_ton' => 120],
            ['id' => 12, 'ten_sach' => 'Giết con chim nhại', 'hinh_anh' => 'xxx', 'gia_ban' => 155000, 'id_the_loai' => 1, 'id_tac_gia' => 12, 'id_nha_xuat_ban' => 11, 'so_luong_ton' => 85],
            ['id' => 13, 'ten_sach' => 'Những kẻ mộng mơ', 'hinh_anh' => 'xxx', 'gia_ban' => 140000, 'id_the_loai' => 1, 'id_tac_gia' => 13, 'id_nha_xuat_ban' => 12, 'so_luong_ton' => 65],
            ['id' => 14, 'ten_sach' => 'Cuộc đời của Pi', 'hinh_anh' => 'xxx', 'gia_ban' => 220000, 'id_the_loai' => 5, 'id_tac_gia' => 15, 'id_nha_xuat_ban' => 13, 'so_luong_ton' => 130],
            ['id' => 15, 'ten_sach' => 'Sự im lặng của bầy cừu', 'hinh_anh' => 'xxx', 'gia_ban' => 175000, 'id_the_loai' => 6, 'id_tac_gia' => 14, 'id_nha_xuat_ban' => 14, 'so_luong_ton' => 77],
            ['id' => 16, 'ten_sach' => 'Lâu đài', 'hinh_anh' => 'xxx', 'gia_ban' => 160000, 'id_the_loai' => 1, 'id_tac_gia' => 15, 'id_nha_xuat_ban' => 15, 'so_luong_ton' => 45],
            ['id' => 17, 'ten_sach' => 'Chiến tranh và Hòa bình', 'hinh_anh' => 'xxx', 'gia_ban' => 180000, 'id_the_loai' => 8, 'id_tac_gia' => 18, 'id_nha_xuat_ban' => 16, 'so_luong_ton' => 68],
            ['id' => 18, 'ten_sach' => 'Anna Karenina', 'hinh_anh' => 'xxx', 'gia_ban' => 210000, 'id_the_loai' => 1, 'id_tac_gia' => 18, 'id_nha_xuat_ban' => 16, 'so_luong_ton' => 74],
            ['id' => 19, 'ten_sach' => 'The Outsiders', 'hinh_anh' => 'xxx', 'gia_ban' => 190000, 'id_the_loai' => 1, 'id_tac_gia' => 20, 'id_nha_xuat_ban' => 17, 'so_luong_ton' => 52],
            ['id' => 20, 'ten_sach' => 'Don Quixote', 'hinh_anh' => 'xxx', 'gia_ban' => 200000, 'id_the_loai' => 1, 'id_tac_gia' => 17, 'id_nha_xuat_ban' => 18, 'so_luong_ton' => 36],
        ]);
    }
}
