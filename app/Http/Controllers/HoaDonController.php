<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function getData()
    {
        $data = HoaDon::join('chi_tiet_hoa_dons', 'chi_tiet_hoa_dons.id_hoa_don', 'hoa_dons.id')
                    ->join('sachs', 'chi_tiet_hoa_dons.id_sach', 'sachs.id')
                    ->select('hoa_dons.*', 'chi_tiet_hoa_dons.so_luong_ban', 'chi_tiet_hoa_dons.gia_ban', 'chi_tiet_hoa_dons.thanh_tien', 'sachs.ten_sach')
                    ->get();
        return response()->json([
            'data' => $data
        ]);
    }
}
