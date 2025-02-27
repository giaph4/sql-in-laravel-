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
                    ->join('sachs', 'danh_gias.id_sach', 'sachs.id')
                    ->join('tac_gias', 'sachs.id_tac_gia', 'tac_gias.id')
                    ->join('the_loais', 'sachs.id_the_loai', 'the_loais.id')
                    ->select('sachs.ten_sach', 'tac_gias.ten_tac_gia', 'danh_gias.sao_danh_giia', 'the_loais.*')
                    ->get();
        return response(['data' => $data]);
    }
}
