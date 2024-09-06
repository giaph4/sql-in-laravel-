<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_hoa_dons';
    protected $fillable = [
        'id_sach',
        'id_hoa_don',
        'so_luong_ban',
        'gia_ban',
        'thanh_tien',
    ];
}
