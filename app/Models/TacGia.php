<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacGia extends Model
{
    use HasFactory;
    protected $table = 'tac_gias';
    protected $fillable = [
        'ten_tac_gia',
        'lien_lac',
    ];
}
