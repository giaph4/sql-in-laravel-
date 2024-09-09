<?php

namespace App\Http\Controllers;

use App\Models\PhieuNhap;
use Illuminate\Http\Request;

class PhieuNhapController extends Controller
{
    public function getData()
    {
        $data = PhieuNhap::join('chi_tiet_phieu_nhaps', 'chi_tiet_phieu_nhaps.id_phieu_nhap', 'phieu_nhaps.id')
                    ->join('sachs', 'chi_tiet_phieu_nhaps.id_sach', 'sachs.id')
                    ->join('nha_xuat_bans', 'sachs.id_nha_xuat_ban', 'nha_xuat_bans.id')
                    ->select('phieu_nhaps.*', 'chi_tiet_phieu_nhaps.so_luong_nhap', 'chi_tiet_phieu_nhaps.gia_nhap', 'sachs.ten_sach', 'nha_xuat_bans.ten_nha_xuat_ban')
                    ->get();
        return response()->json([
            'data' => $data
        ]);
    }
}
