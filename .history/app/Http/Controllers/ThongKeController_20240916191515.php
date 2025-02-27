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
                    ->select('ngay_ban', DB::raw('SUM(chu_tiet_hoa_dons.so_)'))
                    ->groupBy('ngay_ban')
                    ->get();
        return response()->json(['data' => $data]);

    }
}
