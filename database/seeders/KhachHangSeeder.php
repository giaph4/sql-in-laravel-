<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->delete();

        DB::table('khach_hangs')->truncate();

        DB::table('khach_hangs')->insert([
            [
                'ho_va_ten' => 'Nguyen Van A',
                'email' => 'nguyenvana@example.com',
                'so_dien_thoai' => '0123456789',
            ],
            [
                'ho_va_ten' => 'Tran Thi B',
                'email' => 'tranthib@example.com',
                'so_dien_thoai' => '0987654321',
            ],
            [
                'ho_va_ten' => 'Le Van C',
                'email' => 'levanc@example.com',
                'so_dien_thoai' => '0934567890',
            ],
            [
                'ho_va_ten' => 'Pham Thi D',
                'email' => 'phamthid@example.com',
                'so_dien_thoai' => '0945678901',
            ],
            [
                'ho_va_ten' => 'Hoang Van E',
                'email' => 'hoangvane@example.com',
                'so_dien_thoai' => '0912345678',
            ],
            [
                'ho_va_ten' => 'Do Thi F',
                'email' => 'dothif@example.com',
                'so_dien_thoai' => '0909876543',
            ],
            [
                'ho_va_ten' => 'Bui Van G',
                'email' => 'buivang@example.com',
                'so_dien_thoai' => '0987654321',
            ],
            [
                'ho_va_ten' => 'Vu Thi H',
                'email' => 'vuthih@example.com',
                'so_dien_thoai' => '0932123456',
            ],
            [
                'ho_va_ten' => 'Ngo Van I',
                'email' => 'ngovani@example.com',
                'so_dien_thoai' => '0912333444',
            ],
            [
                'ho_va_ten' => 'Vuong Thi K',
                'email' => 'vuongthik@example.com',
                'so_dien_thoai' => '0945123123',
            ],
        ]);
    }
}
