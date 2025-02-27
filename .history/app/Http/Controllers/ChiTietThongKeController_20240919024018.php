<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class ChiTietThongKeController extends Controller
{
    //
    public function chiTietThongKeDanhGiaCuaKhachHang(Request $request)
    {
        $data = KhachHang::where('khach_hangs.ho_va_ten', $request->ho_va_ten)
            ->join('danh_gias', 'khach_hangs.id', '=', 'danh_gias.id_khach_hang')  // Sử dụng id để join thay vì ho_va_ten
            ->join('sachs', 'danh_gias.id_sach', '=', 'sachs.id')
            ->join('tac_gias', 'sachs.id_tac_gia', '=', 'tac_gias.id')
            ->join('the_loais', 'sachs.id_the_loai', '=', 'the_loais.id')
            ->join('nha_xuat_bans', 'sachs.id_nha_xuat_ban', '=', 'nha_xuat_bans.id')  // Thêm join nhà xuất bản
            ->select(
                'sachs.ten_sach',
                'tac_gias.ten_tac_gia',
                'danh_gias.sao_danh_gia',
                'the_loais.ten_the_loai',
                'nha_xuat_bans.ten_nha_xuat_ban',  // Thêm nhà xuất bản
                'danh_gias.noi_dung'  // Nội dung đánh giá
            )
            ->get();
        return response()->json(['data' => $data]);
    }

    public fun
}
