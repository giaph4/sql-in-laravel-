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
Route::get('/thong-ke', [ThongKeController::class, 'thongKe1']);

