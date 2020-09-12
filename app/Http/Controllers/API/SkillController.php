<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function get(Request $request)
    {
        $skill = skill::all();

        if($skill)
            return ResponseFormater::success($skill, 'Data transaksi berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data transaksi tidak ada', 404);
    }
}
