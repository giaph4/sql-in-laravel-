<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietPhieuNhap extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_phieu_nhaps';
    protected $fillable = [
        'id_sach',
        'id_phieu_nhap',
        'so_luong_nhap',
        'gia_nhap',
    ];
}
