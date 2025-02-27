<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use App\Models\HoaDon;
use App\Models\KhachHang;
use App\Models\PhieuNhap;
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

        for ($i = 0; $i < count($data); $i++) {
            $item = $data[$i];

            $listNgayBan[$i] = $item->ngay_ban;
            $listSoLuongBan[$i] = $item->tong_so_luong_ban;
        }

        return response()->json([
            'data' => $data,
            'listNgayBan' => $listNgayBan,
            'listSoLuongBan' => $listSoLuongBan
        ]);
    }

    public function searchthongKe1(Request $request)
    {
        $data = HoaDon::join('chi_tiet_hoa_dons', 'hoa_dons.id', 'chi_tiet_hoa_dons.id_hoa_don')
            ->where('hoa_dons.ngay_ban', '>=', $request->tu_ngay)
            ->where('hoa_dons.ngay_ban', '<=', $request->den_ngay)
            ->select('ngay_ban', DB::raw('SUM(chi_tiet_hoa_dons.so_luong_ban) as tong_so_luong_ban'))
            ->groupBy('ngay_ban')
            ->get();
        $listNgayBan = [];
        $listSoLuongBan = [];

        for ($i = 0; $i < count($data); $i++) {
            $item = $data[$i];

            $listNgayBan[$i] = $item->ngay_ban;
            $listSoLuongBan[$i] = $item->tong_so_luong_ban;
        }

        return response()->json([
            'data' => $data,
            'listNgayBan' => $listNgayBan,
            'listSoLuongBan' => $listSoLuongBan
        ]);
    }

    public function thongKe2()
    {
        $data = PhieuNhap::join('chi_tiet_phieu_nhaps', 'phieu_nhaps.id', 'chi_tiet_phieu_nhaps.id_phieu_nhap')
            ->select('ngay_nhap', DB::raw('SUM(chi_tiet_phieu_nhaps.so_luong_nhap) as tong_so_luong_nhap'))
            ->groupBy('ngay_nhap')
            ->get();
        $listNgayNhap = [];
        $listSoLuongNhap = [];

        for ($i = 0; $i < count($data); $i++) {
            $item = $data[$i];

            $listNgayNhap[$i] = $item->ngay_nhap;
            $listSoLuongNhap[$i] = $item->tong_so_luong_nhap;
        }

        return response()->json([
            'data' => $data,
            'listNgayNhap' => $listNgayNhap,
            'listSoLuongNhap' => $listSoLuongNhap
        ]);
    }

    public function SearchThongKe2(Request $request)
    {
        $data = PhieuNhap::join('chi_tiet_phieu_nhaps', 'phieu_nhaps.id', 'chi_tiet_phieu_nhaps.id_phieu_nhap')
            ->where('phieu_nhaps.ngay_nhap', '>=', $request->tu_ngay)
            ->where('phieu_nhaps.ngay_nhap', '<=', $request->den_ngay)
            ->select('ngay_nhap', DB::raw('SUM(chi_tiet_phieu_nhaps.so_luong_nhap) as tong_so_luong_nhap'))
            ->groupBy('ngay_nhap')
            ->get();
        $listNgayNhap = [];
        $listSoLuongNhap = [];

        for ($i = 0; $i < count($data); $i++) {
            $item = $data[$i];

            $listNgayNhap[$i] = $item->ngay_nhap;
            $listSoLuongNhap[$i] = $item->tong_so_luong_nhap;
        }

        return response()->json([
            'data' => $data,
            'listNgayNhap' => $listNgayNhap,
            'listSoLuongNhap' => $listSoLuongNhap
        ]);
    }

    public function thongKe3()
    {
        $data = KhachHang::join('danh_gias', 'khach_hangs.id', 'danh_gias.id_khach_hang')
            ->select('ho_va_ten', DB::raw('COUNT(danh_gias.id) as tong_so_luong_danh_gia'))
            ->groupBy('ho_va_ten')
            ->get();
        $listDanhGia = [];
        $listSoLuongDanhGia = [];

        for ($i = 0; $i < count($data); $i++) {
            $item = $data[$i];

            $listDanhGia[$i] = $item->ho_va_ten;
            $listSoLuongDanhGia[$i] = $item->tong_so_luong_danh_gia;
        }

        return response()->json([
            'data' => $data,
            'listDanhGia' => $listDanhGia,
            'listSoLuongDanhGia' => $listSoLuongDanhGia
        ]);
    }

    public function searchThongKe3(Request $request)
    {
        $data = KhachHang::join('danh_gias', 'khach_hangs.id', 'danh_gias.id_khach_hang')
            ->where('danh_gias.ngay_danh_gia' , '>=', $request->tu_ngay)
            ->where('danh_gias.ngay_danh_gia' , '<=', $request->den_ngay)
            ->select('ho_va_ten', DB::raw('COUNT(danh_gias.id) as tong_so_luong_danh_gia'))
            ->groupBy('ho_va_ten')
            ->get();
        $listDanhGia = [];
        $listSoLuongDanhGia = [];

        for ($i = 0; $i < count($data); $i++) {
            $item = $data[$i];

            $listDanhGia[$i] = $item->ho_va_ten;
            $listSoLuongDanhGia[$i] = $item->tong_so_luong_danh_gia;
        }

        return response()->json([
            'data' => $data,
            'listDanhGia' => $listDanhGia,
            'listSoLuongDanhGia' => $listSoLuongDanhGia
        ]);
    }

    public function thongKeDanhGiaCuaKhachHang()
    {
        $data = KhachHang::join('danh_gias', 'khach_hangs.id', 'danh_gias.id_khach_hang')
                    ->select('ho_va_ten', DB::raw('COUNT(danh_gias.id) as so_luong_danh_gia'))
                    ->groupBy('ho_va_ten')
                    ->get();
        $listKhachHang = [];
        $listTongDanhGia = [];
        for ($i=0; $i < count($data); $i++) {
            $item = $data[$i];

            $listKhachHang[$i] = $item->ho_va_ten;
            $listTongDanhGia[$i] = $item->so_luong_danh_gia;
        }
        return response()->json([
            'data' => $data.
            'data' => $data.
            'data' => $data.
        ]);
    }
}
