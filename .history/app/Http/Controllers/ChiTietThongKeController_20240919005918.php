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
                    ->join('danh_gias', 'khach_hangs.ho_va_ten', 'danh_gias.id')
                    ->join('sacns', 'danh_gias.id_sach', 'sachs.id')
                    ->join('tac_gias', 'sachs.id_tac_gia', 'tac_gias.id')
                    ->join('the_loai', 'sachs.id_the_loai', 'the_loai.id')
                    ->select('sachs.*', 'tac_gia.*', 'danh_gias.*', 'the_loais.*')
                    ->get();
        return res
    }

}
