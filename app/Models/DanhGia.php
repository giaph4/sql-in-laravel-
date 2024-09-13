<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    use HasFactory;
    protected $table = 'danh_gias';
    protected $fillable = [
        'id_sach',
        'id_khach_hang',
        'sao_danh_gia',
        'noi_dung',
        'ngay_danh_gia'
    ];
}
