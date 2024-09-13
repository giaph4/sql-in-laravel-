<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhieuNhapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phieu_nhaps')->delete();

        DB::table('phieu_nhaps')->truncate();

        DB::table('phieu_nhaps')->insert([
            ['id' => 1, 'so_phieu_nhap' => 'PN001', 'ngay_nhap' => '2024-09-06', 'id_nha_xuat_ban' => 1],
            ['id' => 2, 'so_phieu_nhap' => 'PN002', 'ngay_nhap' => '2024-08-29', 'id_nha_xuat_ban' => 2],
            ['id' => 3, 'so_phieu_nhap' => 'PN003', 'ngay_nhap' => '2024-09-04', 'id_nha_xuat_ban' => 3],
            ['id' => 4, 'so_phieu_nhap' => 'PN004', 'ngay_nhap' => '2024-08-31', 'id_nha_xuat_ban' => 4],
            ['id' => 5, 'so_phieu_nhap' => 'PN005', 'ngay_nhap' => '2024-09-05', 'id_nha_xuat_ban' => 5],
            ['id' => 6, 'so_phieu_nhap' => 'PN006', 'ngay_nhap' => '2024-08-30', 'id_nha_xuat_ban' => 1],
            ['id' => 7, 'so_phieu_nhap' => 'PN007', 'ngay_nhap' => '2024-09-02', 'id_nha_xuat_ban' => 2],
            ['id' => 8, 'so_phieu_nhap' => 'PN008', 'ngay_nhap' => '2024-08-28', 'id_nha_xuat_ban' => 3],
            ['id' => 9, 'so_phieu_nhap' => 'PN009', 'ngay_nhap' => '2024-09-01', 'id_nha_xuat_ban' => 4],
            ['id' => 10, 'so_phieu_nhap' => 'PN010', 'ngay_nhap' => '2024-09-03', 'id_nha_xuat_ban' => 5],
            ['id' => 11, 'so_phieu_nhap' => 'PN011', 'ngay_nhap' => '2024-08-27', 'id_nha_xuat_ban' => 1],
            ['id' => 12, 'so_phieu_nhap' => 'PN012', 'ngay_nhap' => '2024-08-26', 'id_nha_xuat_ban' => 2],
            ['id' => 13, 'so_phieu_nhap' => 'PN013', 'ngay_nhap' => '2024-08-25', 'id_nha_xuat_ban' => 3],
            ['id' => 14, 'so_phieu_nhap' => 'PN014', 'ngay_nhap' => '2024-09-05', 'id_nha_xuat_ban' => 4],
            ['id' => 15, 'so_phieu_nhap' => 'PN015', 'ngay_nhap' => '2024-08-23', 'id_nha_xuat_ban' => 5],
            ['id' => 16, 'so_phieu_nhap' => 'PN016', 'ngay_nhap' => '2024-08-22', 'id_nha_xuat_ban' => 1],
            ['id' => 17, 'so_phieu_nhap' => 'PN017', 'ngay_nhap' => '2024-08-21', 'id_nha_xuat_ban' => 2],
            ['id' => 18, 'so_phieu_nhap' => 'PN018', 'ngay_nhap' => '2024-08-20', 'id_nha_xuat_ban' => 3],
            ['id' => 19, 'so_phieu_nhap' => 'PN019', 'ngay_nhap' => '2024-08-29', 'id_nha_xuat_ban' => 4],
            ['id' => 20, 'so_phieu_nhap' => 'PN020', 'ngay_nhap' => '2024-08-18', 'id_nha_xuat_ban' => 5],
        ]);
    }
}
