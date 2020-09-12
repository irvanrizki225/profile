<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function get(Request $request)
    {
        $experience = experience::all();

        if($experience)
            return ResponseFormater::success($experience, 'Data transaksi berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data transaksi tidak ada', 404);
    }
}
