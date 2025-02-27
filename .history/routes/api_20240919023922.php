<?php

use App\Http\Controllers\ChiTietThongKeController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\PhieuNhapController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\ThongKeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/sach/data', [SachController::class, 'getData']);
Route::get('/phieu-nhap/data', [PhieuNhapController::class, 'getData']);
Route::get('/hoa-don/data', [HoaDonController::class, 'getData']);
Route::get('/thong-ke1', [ThongKeController::class, 'thongKe1']);
Route::post('/search/thong-ke1', [ThongKeController::class, 'searchthongKe1']);

Route::get('/thong-ke2', [ThongKeController::class, 'thongKe2']);
Route::post('/search/thong-ke2', [ThongKeController::class, 'SearchThongKe2']);


Route::get('/thong-ke3', [ThongKeController::class, 'thongKe3']);
Route::post('/search/thong-ke3', [ThongKeController::class, 'searchThongKe3']);


Route::get('/thong-ke/khach-hang/danh-gia', [ThongKeController::class, 'thongKeDanhGiaCuaKhachHang']);
Route::get('/thong-ke/sach/nhap-kho', [ThongKeController::class, 'thongKeSachNhapKho']);
Route::get('/thong-ke/sach/nhap-kho', [ThongKeController::class, 'thongKeSachNhapKho']);
Route::get('/thong-ke/the-loai/ton-kho', [ThongKeController::class, 'thongKeTheLoaiTonKho']);
Route::get('/thong-ke/sach/tac-gia', [ThongKeController::class, 'thongKeSachCuaTacGia']);
Route::get('/thong-ke/sach/doanh-thu', [ThongKeController::class, 'thongKeDoanhThuSach']);
Route::get('/thong-ke/the-loai/doanh-thu', [ThongKeController::class, 'thongKeDoanhThuTheLoai']);
Route::get('/thong-ke/sach/khach-hang-chi-tieu', [ThongKeController::class, 'tongChiTieuKhachHang']);

Route::post('/thong-ke/khach-hang/danh-gia/chi-tiet', [ChiTietThongKeController::class, 'chiTietThongKeDanhGiaCuaKhachHang']);
