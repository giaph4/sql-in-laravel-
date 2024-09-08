<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chi_tiet_hoa_dons')->delete();

        DB::table('chi_tiet_hoa_dons')->truncate();

        DB::table('chi_tiet_hoa_dons')->insert([
            ['id' => 1, 'id_sach' => 1, 'id_hoa_don' => 1, 'so_luong_ban' => 2, 'gia_ban' => 150000, 'thanh_tien' => 300000],
            ['id' => 2, 'id_sach' => 4, 'id_hoa_don' => 1, 'so_luong_ban' => 1, 'gia_ban' => 175000, 'thanh_tien' => 175000],
            ['id' => 3, 'id_sach' => 10, 'id_hoa_don' => 1, 'so_luong_ban' => 5, 'gia_ban' => 170000, 'thanh_tien' => 850000],
            ['id' => 4, 'id_sach' => 14, 'id_hoa_don' => 1, 'so_luong_ban' => 3, 'gia_ban' => 220000, 'thanh_tien' => 660000],
            ['id' => 5, 'id_sach' => 5, 'id_hoa_don' => 2, 'so_luong_ban' => 1, 'gia_ban' => 160000, 'thanh_tien' => 160000],
            ['id' => 6, 'id_sach' => 3, 'id_hoa_don' => 2, 'so_luong_ban' => 3, 'gia_ban' => 160000, 'thanh_tien' => 480000],
            ['id' => 7, 'id_sach' => 1, 'id_hoa_don' => 2, 'so_luong_ban' => 1, 'gia_ban' => 160000, 'thanh_tien' => 160000],
            ['id' => 9, 'id_sach' => 3, 'id_hoa_don' => 3, 'so_luong_ban' => 4, 'gia_ban' => 220000, 'thanh_tien' => 880000],
            ['id' => 10, 'id_sach' => 7, 'id_hoa_don' => 4, 'so_luong_ban' => 1, 'gia_ban' => 180000, 'thanh_tien' =>  180000],
            ['id' => 11, 'id_sach' => 9, 'id_hoa_don' => 4, 'so_luong_ban' => 3, 'gia_ban' => 165000, 'thanh_tien' =>  495000],
            ['id' => 12, 'id_sach' => 11, 'id_hoa_don' => 4, 'so_luong_ban' => 4, 'gia_ban' => 200000, 'thanh_tien' => 800000],
            ['id' => 13, 'id_sach' => 5, 'id_hoa_don' => 4, 'so_luong_ban' => 1, 'gia_ban' => 160000, 'thanh_tien' =>  160000],
            ['id' => 14, 'id_sach' => 3, 'id_hoa_don' => 4, 'so_luong_ban' => 2, 'gia_ban' => 200000, 'thanh_tien' =>  400000],
            ['id' => 15, 'id_sach' => 6, 'id_hoa_don' => 5, 'so_luong_ban' => 1, 'gia_ban' => 140000, 'thanh_tien' =>  180000],
            ['id' => 16, 'id_sach' => 8, 'id_hoa_don' => 5, 'so_luong_ban' => 3, 'gia_ban' => 190000, 'thanh_tien' =>  570000],
            ['id' => 17, 'id_sach' => 17, 'id_hoa_don' => 6, 'so_luong_ban' => 2, 'gia_ban' => 180000, 'thanh_tien' => 360000],
            ['id' => 18, 'id_sach' => 18, 'id_hoa_don' => 6, 'so_luong_ban' => 1, 'gia_ban' => 210000, 'thanh_tien' => 210000],
            ['id' => 19, 'id_sach' => 20, 'id_hoa_don' => 6, 'so_luong_ban' => 2, 'gia_ban' => 200000, 'thanh_tien' => 400000],
            ['id' => 20, 'id_sach' => 13, 'id_hoa_don' => 7, 'so_luong_ban' => 1, 'gia_ban' => 140000, 'thanh_tien' => 140000],
            ['id' => 21, 'id_sach' => 7, 'id_hoa_don' => 8, 'so_luong_ban' => 1, 'gia_ban' => 180000, 'thanh_tien' =>  180000],
            ['id' => 22, 'id_sach' => 10, 'id_hoa_don' => 8, 'so_luong_ban' => 2, 'gia_ban' => 170000, 'thanh_tien' => 340000],
            ['id' => 23, 'id_sach' => 14, 'id_hoa_don' => 9, 'so_luong_ban' => 2, 'gia_ban' => 220000, 'thanh_tien' => 440000],
            ['id' => 24, 'id_sach' => 15, 'id_hoa_don' => 9, 'so_luong_ban' => 1, 'gia_ban' => 175000, 'thanh_tien' => 175000],
            ['id' => 25, 'id_sach' => 16, 'id_hoa_don' => 9, 'so_luong_ban' => 3, 'gia_ban' => 160000, 'thanh_tien' => 480000],
            ['id' => 26, 'id_sach' => 4, 'id_hoa_don' => 10, 'so_luong_ban' => 2, 'gia_ban' => 175000, 'thanh_tien' => 350000],
            ['id' => 27, 'id_sach' => 1, 'id_hoa_don' => 11, 'so_luong_ban' => 1, 'gia_ban' => 150000, 'thanh_tien' => 150000],
            ['id' => 28, 'id_sach' => 2, 'id_hoa_don' => 11, 'so_luong_ban' => 3, 'gia_ban' => 120000, 'thanh_tien' => 360000],
            ['id' => 29, 'id_sach' => 9, 'id_hoa_don' => 12, 'so_luong_ban' => 2, 'gia_ban' => 165000, 'thanh_tien' => 330000],
            ['id' => 30, 'id_sach' => 6, 'id_hoa_don' => 12, 'so_luong_ban' => 1, 'gia_ban' => 140000, 'thanh_tien' => 140000],
            ['id' => 31, 'id_sach' => 3, 'id_hoa_don' => 12, 'so_luong_ban' => 1, 'gia_ban' => 200000, 'thanh_tien' => 200000],
            ['id' => 32, 'id_sach' => 7, 'id_hoa_don' => 13, 'so_luong_ban' => 2, 'gia_ban' => 180000, 'thanh_tien' =>  360000],
            ['id' => 33, 'id_sach' => 13, 'id_hoa_don' => 13, 'so_luong_ban' => 3, 'gia_ban' => 140000, 'thanh_tien' => 420000],
            ['id' => 34, 'id_sach' => 14, 'id_hoa_don' => 14, 'so_luong_ban' => 2, 'gia_ban' => 220000, 'thanh_tien' => 440000],
            ['id' => 35, 'id_sach' => 15, 'id_hoa_don' => 14, 'so_luong_ban' => 3, 'gia_ban' => 175000, 'thanh_tien' => 525000],
            ['id' => 36, 'id_sach' => 16, 'id_hoa_don' => 14, 'so_luong_ban' => 1, 'gia_ban' => 160000, 'thanh_tien' => 160000],
            ['id' => 37, 'id_sach' => 11, 'id_hoa_don' => 15, 'so_luong_ban' => 1, 'gia_ban' => 200000, 'thanh_tien' => 200000],
            ['id' => 38, 'id_sach' => 10, 'id_hoa_don' => 16, 'so_luong_ban' => 2, 'gia_ban' => 170000, 'thanh_tien' => 340000],
            ['id' => 39, 'id_sach' => 7, 'id_hoa_don' => 17, 'so_luong_ban' => 2, 'gia_ban' => 180000, 'thanh_tien' =>  360000],
            ['id' => 40, 'id_sach' => 17, 'id_hoa_don' => 17, 'so_luong_ban' => 3, 'gia_ban' => 180000, 'thanh_tien' => 540000],
            ['id' => 41, 'id_sach' => 3, 'id_hoa_don' => 18, 'so_luong_ban' => 2, 'gia_ban' => 200000, 'thanh_tien' => 400000],
            ['id' => 42, 'id_sach' => 5, 'id_hoa_don' => 18, 'so_luong_ban' => 3, 'gia_ban' => 160000, 'thanh_tien' => 480000],
            ['id' => 43, 'id_sach' => 18, 'id_hoa_don' => 18, 'so_luong_ban' => 1, 'gia_ban' => 210000, 'thanh_tien' => 210000],
            ['id' => 44, 'id_sach' => 19, 'id_hoa_don' => 19, 'so_luong_ban' => 2, 'gia_ban' => 190000, 'thanh_tien' =>  380000],
            ['id' => 45, 'id_sach' => 1, 'id_hoa_don' => 19, 'so_luong_ban' => 3, 'gia_ban' => 150000, 'thanh_tien' => 450000],
            ['id' => 46, 'id_sach' => 10, 'id_hoa_don' => 20, 'so_luong_ban' => 2, 'gia_ban' => 170000, 'thanh_tien' => 340000],
        ]);

    }
}
