<?php

use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\PhieuNhapController;
use App\Http\Controllers\SachController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/sach/data', [SachController::class, 'getData']);
Route::get('/phieu-nhap/data', [PhieuNhapController::class, 'getData']);
Route::get('/hoa-don/data', [HoaDonController::class, 'getData']);
Route::get('/thong-ke', [HoaDonController::class, 'getData']);

