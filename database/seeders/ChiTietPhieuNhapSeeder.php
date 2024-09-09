<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietPhieuNhapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chi_tiet_phieu_nhaps')->delete();

        DB::table('chi_tiet_phieu_nhaps')->truncate();

        DB::table('chi_tiet_phieu_nhaps')->insert([
            ['id' => 1, 'id_sach' => 1, 'id_phieu_nhap' => 1, 'so_luong_nhap' => 10, 'gia_nhap' => 120000],
            ['id' => 2, 'id_sach' => 2, 'id_phieu_nhap' => 1, 'so_luong_nhap' => 15, 'gia_nhap' => 100000],
            ['id' => 3, 'id_sach' => 9, 'id_phieu_nhap' => 1, 'so_luong_nhap' => 14, 'gia_nhap' => 130000],
            ['id' => 4, 'id_sach' => 16, 'id_phieu_nhap' => 1, 'so_luong_nhap' => 25, 'gia_nhap' => 135000],
           
            ['id' => 5, 'id_sach' => 16, 'id_phieu_nhap' => 2, 'so_luong_nhap' => 25, 'gia_nhap' => 135000],
            ['id' => 6, 'id_sach' => 2, 'id_phieu_nhap' => 2, 'so_luong_nhap' => 15, 'gia_nhap' => 100000],
            ['id' => 7, 'id_sach' => 3, 'id_phieu_nhap' => 2, 'so_luong_nhap' => 20, 'gia_nhap' => 180000],
            ['id' => 8, 'id_sach' => 4, 'id_phieu_nhap' => 2, 'so_luong_nhap' => 8, 'gia_nhap' => 160000],
           
            ['id' => 9, 'id_sach' => 1, 'id_phieu_nhap' => 3, 'so_luong_nhap' => 10, 'gia_nhap' => 120000],
            ['id' => 10, 'id_sach' => 13, 'id_phieu_nhap' => 3, 'so_luong_nhap' => 7, 'gia_nhap' => 140000],
            ['id' => 11, 'id_sach' => 3, 'id_phieu_nhap' => 3, 'so_luong_nhap' => 20, 'gia_nhap' => 180000],
            ['id' => 12, 'id_sach' => 5, 'id_phieu_nhap' => 3, 'so_luong_nhap' => 12, 'gia_nhap' => 140000],
            ['id' => 13, 'id_sach' => 6, 'id_phieu_nhap' => 3, 'so_luong_nhap' => 25, 'gia_nhap' => 110000],
            ['id' => 14, 'id_sach' => 16, 'id_phieu_nhap' => 3, 'so_luong_nhap' => 25, 'gia_nhap' => 135000],
            ['id' => 15, 'id_sach' => 17, 'id_phieu_nhap' => 3, 'so_luong_nhap' => 12, 'gia_nhap' => 160000],

            ['id' => 16, 'id_sach' => 7, 'id_phieu_nhap' => 4, 'so_luong_nhap' => 18, 'gia_nhap' => 155000],
            ['id' => 17, 'id_sach' => 8, 'id_phieu_nhap' => 4, 'so_luong_nhap' => 22, 'gia_nhap' => 170000],
            ['id' => 18, 'id_sach' => 15, 'id_phieu_nhap' => 4, 'so_luong_nhap' => 10, 'gia_nhap' => 145000],
            ['id' => 19, 'id_sach' => 16, 'id_phieu_nhap' => 4, 'so_luong_nhap' => 25, 'gia_nhap' => 135000],
            
            ['id' => 20, 'id_sach' => 9, 'id_phieu_nhap' => 5, 'so_luong_nhap' => 14, 'gia_nhap' => 130000],
            ['id' => 21, 'id_sach' => 10, 'id_phieu_nhap' => 5, 'so_luong_nhap' => 30, 'gia_nhap' => 150000],
            ['id' => 22, 'id_sach' => 13, 'id_phieu_nhap' => 5, 'so_luong_nhap' => 7, 'gia_nhap' => 140000],
            ['id' => 23, 'id_sach' => 4, 'id_phieu_nhap' => 5, 'so_luong_nhap' => 8, 'gia_nhap' => 160000],
           
            ['id' => 24, 'id_sach' => 11, 'id_phieu_nhap' => 6, 'so_luong_nhap' => 5, 'gia_nhap' => 180000],
            
            ['id' => 25, 'id_sach' => 12, 'id_phieu_nhap' => 7, 'so_luong_nhap' => 20, 'gia_nhap' => 160000],
            ['id' => 26, 'id_sach' => 13, 'id_phieu_nhap' => 7, 'so_luong_nhap' => 7, 'gia_nhap' => 140000],
            ['id' => 27, 'id_sach' => 14, 'id_phieu_nhap' => 7, 'so_luong_nhap' => 15, 'gia_nhap' => 200000],
            ['id' => 28, 'id_sach' => 3, 'id_phieu_nhap' => 7, 'so_luong_nhap' => 20, 'gia_nhap' => 180000],
            ['id' => 29, 'id_sach' => 4, 'id_phieu_nhap' => 7, 'so_luong_nhap' => 8, 'gia_nhap' => 160000],
           
            ['id' => 30, 'id_sach' => 15, 'id_phieu_nhap' => 8, 'so_luong_nhap' => 10, 'gia_nhap' => 145000],
            
            ['id' => 31, 'id_sach' => 16, 'id_phieu_nhap' => 9, 'so_luong_nhap' => 25, 'gia_nhap' => 135000],
            ['id' => 32, 'id_sach' => 17, 'id_phieu_nhap' => 9, 'so_luong_nhap' => 12, 'gia_nhap' => 160000],
            ['id' => 33, 'id_sach' => 18, 'id_phieu_nhap' => 9, 'so_luong_nhap' => 17, 'gia_nhap' => 170000],
           
            ['id' => 34, 'id_sach' => 19, 'id_phieu_nhap' => 10, 'so_luong_nhap' => 6, 'gia_nhap' => 180000],
            ['id' => 35, 'id_sach' => 20, 'id_phieu_nhap' => 10, 'so_luong_nhap' => 20, 'gia_nhap' => 190000],
            ['id' => 36, 'id_sach' => 2, 'id_phieu_nhap' => 10, 'so_luong_nhap' => 15, 'gia_nhap' => 100000],
            ['id' => 37, 'id_sach' => 9, 'id_phieu_nhap' => 10, 'so_luong_nhap' => 14, 'gia_nhap' => 130000],
          
        ]);
    }
}
