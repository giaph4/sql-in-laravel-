<?php

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
Route::get('/search/thong-ke2', [ThongKeController::class, 'SeachhongKe2']);
