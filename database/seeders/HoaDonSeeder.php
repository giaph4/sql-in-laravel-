<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hoa_dons')->delete();

        DB::table('hoa_dons')->truncate();

        DB::table('hoa_dons')->insert([
            ['id' => 1, 'ma_hoa_don' => 'HD001', 'ngay_ban' => '2024-09-06'],
            ['id' => 2, 'ma_hoa_don' => 'HD002', 'ngay_ban' => '2024-09-05'],
            ['id' => 3, 'ma_hoa_don' => 'HD003', 'ngay_ban' => '2024-09-04'],
            ['id' => 4, 'ma_hoa_don' => 'HD004', 'ngay_ban' => '2024-09-03'],
            ['id' => 5, 'ma_hoa_don' => 'HD005', 'ngay_ban' => '2024-09-02'],
            ['id' => 6, 'ma_hoa_don' => 'HD006', 'ngay_ban' => '2024-09-01'],
            ['id' => 7, 'ma_hoa_don' => 'HD007', 'ngay_ban' => '2024-08-31'],
            ['id' => 8, 'ma_hoa_don' => 'HD008', 'ngay_ban' => '2024-08-30'],
            ['id' => 9, 'ma_hoa_don' => 'HD009', 'ngay_ban' => '2024-08-29'],
            ['id' => 10, 'ma_hoa_don' => 'HD010', 'ngay_ban' => '2024-08-28'],
            ['id' => 11, 'ma_hoa_don' => 'HD011', 'ngay_ban' => '2024-08-27'],
            ['id' => 12, 'ma_hoa_don' => 'HD012', 'ngay_ban' => '2024-08-26'],
            ['id' => 13, 'ma_hoa_don' => 'HD013', 'ngay_ban' => '2024-08-25'],
            ['id' => 14, 'ma_hoa_don' => 'HD014', 'ngay_ban' => '2024-08-24'],
            ['id' => 15, 'ma_hoa_don' => 'HD015', 'ngay_ban' => '2024-08-23'],
            ['id' => 16, 'ma_hoa_don' => 'HD016', 'ngay_ban' => '2024-08-22'],
            ['id' => 17, 'ma_hoa_don' => 'HD017', 'ngay_ban' => '2024-08-21'],
            ['id' => 18, 'ma_hoa_don' => 'HD018', 'ngay_ban' => '2024-08-20'],
            ['id' => 19, 'ma_hoa_don' => 'HD019', 'ngay_ban' => '2024-08-19'],
            ['id' => 20, 'ma_hoa_don' => 'HD020', 'ngay_ban' => '2024-08-18'],
        ]);


    }
}
