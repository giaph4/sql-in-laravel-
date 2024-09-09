<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_gias')->delete();

        DB::table('danh_gias')->truncate();

        DB::table('danh_gias')->insert([
            // Đánh giá cho hóa đơn 1 - Khách hàng 1
            ['id_sach' => 1, 'id_khach_hang' => 1, 'sao_danh_gia' => 1, 'noi_dung' => 'Tệ!'],
            ['id_sach' => 4, 'id_khach_hang' => 1, 'sao_danh_gia' => 4, 'noi_dung' => 'Rất tốt!'],
            ['id_sach' => 10, 'id_khach_hang' => 1, 'sao_danh_gia' => 4, 'noi_dung' => 'Khá ổn!'],
            ['id_sach' => 14, 'id_khach_hang' => 1, 'sao_danh_gia' => 5, 'noi_dung' => 'Tuyệt vời!'],

            // Đánh giá cho hóa đơn 2 - Khách hàng 2
            ['id_sach' => 5, 'id_khach_hang' => 2, 'sao_danh_gia' => 2, 'noi_dung' => 'Quá dở'],
            ['id_sach' => 3, 'id_khach_hang' => 2, 'sao_danh_gia' => 3, 'noi_dung' => 'Bình thường.'],
            ['id_sach' => 1, 'id_khach_hang' => 2, 'sao_danh_gia' => 5, 'noi_dung' => 'Sách rất hay!'],

            // Đánh giá cho hóa đơn 3 - Khách hàng 1
            ['id_sach' => 3, 'id_khach_hang' => 1, 'sao_danh_gia' => 4, 'noi_dung' => 'Khá ổn!'],

            // Đánh giá cho hóa đơn 4 - Khách hàng 3
            ['id_sach' => 7, 'id_khach_hang' => 3, 'sao_danh_gia' => 4, 'noi_dung' => 'Khá tốt!'],
            ['id_sach' => 9, 'id_khach_hang' => 3, 'sao_danh_gia' => 4, 'noi_dung' => 'Tuyệt!'],
            ['id_sach' => 11, 'id_khach_hang' => 3, 'sao_danh_gia' => 5, 'noi_dung' => 'Tuyệt vời!'],
            ['id_sach' => 5, 'id_khach_hang' => 3, 'sao_danh_gia' => 4, 'noi_dung' => 'Rất hài lòng!'],
            ['id_sach' => 3, 'id_khach_hang' => 3, 'sao_danh_gia' => 3, 'noi_dung' => 'Ổn.'],

            // Đánh giá cho hóa đơn 5 - Khách hàng 4
            ['id_sach' => 6, 'id_khach_hang' => 4, 'sao_danh_gia' => 4, 'noi_dung' => 'Khá tốt.'],
            ['id_sach' => 8, 'id_khach_hang' => 4, 'sao_danh_gia' => 5, 'noi_dung' => 'Tuyệt vời!'],

            // Đánh giá cho hóa đơn 6 - Khách hàng 4
            ['id_sach' => 17, 'id_khach_hang' => 4, 'sao_danh_gia' => 4, 'noi_dung' => 'Rất hài lòng!'],
            ['id_sach' => 18, 'id_khach_hang' => 4, 'sao_danh_gia' => 5, 'noi_dung' => 'Rất hay!'],
            ['id_sach' => 20, 'id_khach_hang' => 4, 'sao_danh_gia' => 4, 'noi_dung' => 'Tốt.'],

            // Đánh giá cho hóa đơn 7 - Khách hàng 5
            ['id_sach' => 13, 'id_khach_hang' => 5, 'sao_danh_gia' => 5, 'noi_dung' => 'Sách rất hay!'],

            // Đánh giá cho hóa đơn 8 - Khách hàng 2
            ['id_sach' => 7, 'id_khach_hang' => 2, 'sao_danh_gia' => 1, 'noi_dung' => 'Đọc không ra gì!'],
            ['id_sach' => 10, 'id_khach_hang' => 2, 'sao_danh_gia' => 4, 'noi_dung' => 'Khá ổn!'],

            // Đánh giá cho hóa đơn 9 - Khách hàng 7
            ['id_sach' => 14, 'id_khach_hang' => 7, 'sao_danh_gia' => 5, 'noi_dung' => 'Tuyệt vời!'],
            ['id_sach' => 15, 'id_khach_hang' => 7, 'sao_danh_gia' => 4, 'noi_dung' => 'Khá ổn.'],
            ['id_sach' => 16, 'id_khach_hang' => 7, 'sao_danh_gia' => 5, 'noi_dung' => 'Tuyệt!'],
            // Đánh giá cho hóa đơn 10 - Khách hàng 7
            ['id_sach' => 4, 'id_khach_hang' => 7, 'sao_danh_gia' => 5, 'noi_dung' => 'Sách rất hay!'],

            // Đánh giá cho hóa đơn 11 - Khách hàng 7
            ['id_sach' => 1, 'id_khach_hang' => 7, 'sao_danh_gia' => 4, 'noi_dung' => 'Khá ổn.'],
            ['id_sach' => 2, 'id_khach_hang' => 7, 'sao_danh_gia' => 5, 'noi_dung' => 'Tuyệt vời!'],

            // Đánh giá cho hóa đơn 12 - Khách hàng 9
            ['id_sach' => 9, 'id_khach_hang' => 9, 'sao_danh_gia' => 4, 'noi_dung' => 'Rất tốt!'],
            ['id_sach' => 6, 'id_khach_hang' => 9, 'sao_danh_gia' => 3, 'noi_dung' => 'Khá hài lòng.'],
            ['id_sach' => 3, 'id_khach_hang' => 9, 'sao_danh_gia' => 5, 'noi_dung' => 'Sách tuyệt vời!'],

            // Đánh giá cho hóa đơn 13 - Khách hàng 10
            ['id_sach' => 7, 'id_khach_hang' => 10, 'sao_danh_gia' => 5, 'noi_dung' => 'Sách rất hay!'],
            ['id_sach' => 13, 'id_khach_hang' => 10, 'sao_danh_gia' => 4, 'noi_dung' => 'Tốt!'],

            // Đánh giá cho hóa đơn 14 - Khách hàng 8
            ['id_sach' => 14, 'id_khach_hang' => 8, 'sao_danh_gia' => 1, 'noi_dung' => 'Quá tệ cho một tác phẩm!'],
            ['id_sach' => 15, 'id_khach_hang' => 8, 'sao_danh_gia' => 4, 'noi_dung' => 'Tốt!'],
            ['id_sach' => 16, 'id_khach_hang' => 8, 'sao_danh_gia' => 2, 'noi_dung' => 'Không hay'],

            // Đánh giá cho hóa đơn 15 - Khách hàng 10
            ['id_sach' => 11, 'id_khach_hang' => 10, 'sao_danh_gia' => 5, 'noi_dung' => 'Sách rất tuyệt!'],

            // Đánh giá cho hóa đơn 16 - Khách hàng 9
            ['id_sach' => 10, 'id_khach_hang' => 9, 'sao_danh_gia' => 4, 'noi_dung' => 'Khá tốt!'],

            // Đánh giá cho hóa đơn 17 - Khách hàng 9
            ['id_sach' => 7, 'id_khach_hang' => 9, 'sao_danh_gia' => 5, 'noi_dung' => 'Sách hay!'],
            ['id_sach' => 17, 'id_khach_hang' => 9, 'sao_danh_gia' => 3, 'noi_dung' => 'Đọc không có gì hay'],

            // Đánh giá cho hóa đơn 18 - Khách hàng 3
            ['id_sach' => 3, 'id_khach_hang' => 3, 'sao_danh_gia' => 2, 'noi_dung' => 'Khá tệ'],
            ['id_sach' => 5, 'id_khach_hang' => 3, 'sao_danh_gia' => 4, 'noi_dung' => 'Khá tốt!'],
            ['id_sach' => 18, 'id_khach_hang' => 3, 'sao_danh_gia' => 5, 'noi_dung' => 'Tuyệt vời!'],

            // Đánh giá cho hóa đơn 19 - Khách hàng 1
            ['id_sach' => 19, 'id_khach_hang' => 1, 'sao_danh_gia' => 5, 'noi_dung' => 'Tuyệt!'],
            ['id_sach' => 1, 'id_khach_hang' => 1, 'sao_danh_gia' => 4, 'noi_dung' => 'Khá tốt!'],

            // Đánh giá cho hóa đơn 20 - Khách hàng 2
            ['id_sach' => 10, 'id_khach_hang' => 2, 'sao_danh_gia' => 5, 'noi_dung' => 'Sách tuyệt!'],
        ]);
    }
}
