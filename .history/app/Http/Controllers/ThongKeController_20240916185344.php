<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    //
    public function thongKe1()
    {
        $data = HoaDon::select('ngay_ban')
                    ->groupBy('ngay_ban')
                    ->get();
        return response()->json([''data]);

    }
}
