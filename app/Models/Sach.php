<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;
    protected $table = 'sachs';
    protected $fillable = [
        'ten_sach',
        'id_the_loai',
        'hinh_anh',
        'id_tac_gia',
        'id_nha_xuat_ban',
        'so_luong_ton',
        'gia_ban',
    ];
}
