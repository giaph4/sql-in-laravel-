<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use Illuminate\Http\Request;

class SachController extends Controller
{
    public function getData()
    {
        $data = Sach::join('tac_gias', 'sachs.id_tac_gia', 'tac_gias.id')
                    ->join('the_loais', 'sachs.id_the_loai', 'the_loais.id')
                    ->join('nha_xuat_bans', 'sachs.id_nha_xuat_ban', 'nha_xuat_bans.id')
                    ->select('sachs.*', 'tac_gias.ten_tac_gia', 'the_loais.ten_the_loai', 'nha_xuat_bans.ten_nha_xuat_ban')
                    ->get();
        return response()->json([
            'data' => $data
        ]);
    }
}
