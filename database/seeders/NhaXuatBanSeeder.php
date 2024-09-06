<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhaXuatBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nha_xuat_bans')->delete();

        DB::table('nha_xuat_bans')->truncate();

        DB::table('nha_xuat_bans')->insert([
            ['id' => 1, 'ten_nha_xuat_ban' => 'NXB Trẻ', 'dia_chi' => '123 Đường Sách, TP.HCM', 'so_dien_thoai' => '0123456789'],
            ['id' => 2, 'ten_nha_xuat_ban' => 'NXB Kim Đồng', 'dia_chi' => '456 Đường Văn Học, Hà Nội', 'so_dien_thoai' => '0987654321'],
            ['id' => 3, 'ten_nha_xuat_ban' => 'NXB Văn Học', 'dia_chi' => '789 Đường Truyện, Đà Nẵng', 'so_dien_thoai' => '0934567890'],
            ['id' => 4, 'ten_nha_xuat_ban' => 'NXB Khoa Học', 'dia_chi' => '101 Đường Khoa Học, TP.HCM', 'so_dien_thoai' => '0945678901'],
            ['id' => 5, 'ten_nha_xuat_ban' => 'NXB Giáo Dục', 'dia_chi' => '202 Đường Học Vấn, Hà Nội', 'so_dien_thoai' => '0912345678'],
            ['id' => 6, 'ten_nha_xuat_ban' => 'NXB Sống Mới', 'dia_chi' => '303 Đường Phát Triển, Hải Phòng', 'so_dien_thoai' => '0923456789'],
            ['id' => 7, 'ten_nha_xuat_ban' => 'NXB Nghệ Thuật', 'dia_chi' => '404 Đường Nghệ Sĩ, Huế', 'so_dien_thoai' => '0956789012'],
            ['id' => 8, 'ten_nha_xuat_ban' => 'NXB Sáng Tạo', 'dia_chi' => '505 Đường Sáng Tạo, Vũng Tàu', 'so_dien_thoai' => '0978901234'],
            ['id' => 9, 'ten_nha_xuat_ban' => 'NXB Thiếu Nhi', 'dia_chi' => '606 Đường Trẻ Em, Bình Dương', 'so_dien_thoai' => '0967890123'],
            ['id' => 10, 'ten_nha_xuat_ban' => 'NXB Thế Giới', 'dia_chi' => '707 Đường Toàn Cầu, Hà Nội', 'so_dien_thoai' => '0989012345'],
            ['id' => 11, 'ten_nha_xuat_ban' => 'NXB Văn Hóa', 'dia_chi' => '808 Đường Sử Ký, Ninh Bình', 'so_dien_thoai' => '0981112233'],
            ['id' => 12, 'ten_nha_xuat_ban' => 'NXB Công Nghệ', 'dia_chi' => '909 Đường Công Nghệ, TP.HCM', 'so_dien_thoai' => '0977778899'],
            ['id' => 13, 'ten_nha_xuat_ban' => 'NXB Lịch Sử', 'dia_chi' => '1010 Đường Kỷ Niệm, Hà Nội', 'so_dien_thoai' => '0966667788'],
            ['id' => 14, 'ten_nha_xuat_ban' => 'NXB Thơ Văn', 'dia_chi' => '1111 Đường Văn Chương, TP.HCM', 'so_dien_thoai' => '0955556677'],
            ['id' => 15, 'ten_nha_xuat_ban' => 'NXB Du Lịch', 'dia_chi' => '1212 Đường Phiêu Lưu, Đà Nẵng', 'so_dien_thoai' => '0944445566'],
            ['id' => 16, 'ten_nha_xuat_ban' => 'NXB Sức Khỏe', 'dia_chi' => '1313 Đường Chăm Sóc, Hà Nội', 'so_dien_thoai' => '0933334455'],
            ['id' => 17, 'ten_nha_xuat_ban' => 'NXB Kinh Tế', 'dia_chi' => '1414 Đường Kinh Tế, Hải Phòng', 'so_dien_thoai' => '0922223344'],
            ['id' => 18, 'ten_nha_xuat_ban' => 'NXB Tâm Lý', 'dia_chi' => '1515 Đường Tâm Hồn, Cần Thơ', 'so_dien_thoai' => '0911112233'],
            ['id' => 19, 'ten_nha_xuat_ban' => 'NXB Xã Hội', 'dia_chi' => '1616 Đường Hòa Bình, Huế', 'so_dien_thoai' => '0900001112'],
            ['id' => 20, 'ten_nha_xuat_ban' => 'NXB Tri Thức', 'dia_chi' => '1717 Đường Tri Thức, Nha Trang', 'so_dien_thoai' => '0899990001'],
        ]);
    }
}
