<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class ChiTietThongKeController extends Controller
{
    //
    public function chiTietThongKeDanhGiaCuaKhachHang(Request $request)
    {
        $data = KhachHang::where('ho_va_ten', $request->ho_va_ten)
                    ->join('danh')
    }

}
