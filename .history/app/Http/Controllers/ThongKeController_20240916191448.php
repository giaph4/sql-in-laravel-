<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    //
    public function thongKe1()
    {
        $data = HoaDon::join('chi_tiet_hoa_dons', 'hoa_dons.id', 'chi_tiet_hoa_dons.id_hoa_don')
                    ->select('ngay_ban', )
                    ->groupBy('ngay_ban')
                    ->get();
        return response()->json(['data' => $data]);

    }
}
