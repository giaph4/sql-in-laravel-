<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    use HasFactory;
    protected $table = 'phieu_nhaps';
    protected $fillable = [
        'so_phieu_nhap',
        'ngay_nhap',
        'id_nha_xuat_ban',
    ];
}
