<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController extends Controller
{
    //
    public function thongKe1()
    {
        $data = HoaDon::join('chi_tiet_hoa_dons', 'hoa_dons.id', 'chi_tiet_hoa_dons.id_hoa_don')
                    ->select('ngay_ban', DB::raw('SUM(chi_tiet_hoa_dons.so_luong_ban) as tong_so_luong_ban'))
                    ->groupBy('ngay_ban')
                    ->get();
        $listNgayBan = [];
        $listSoLuongBan = [];

        for ($i=0; $i < count($data); $i++) {
            # code...
        }

        return response()->json(['data' => $data]);
    }
}
