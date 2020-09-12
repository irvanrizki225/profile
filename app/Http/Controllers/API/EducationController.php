<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function get(Request $request)
    {
        $education = education::all();

        if($education)
            return ResponseFormater::success($education, 'Data transaksi berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data transaksi tidak ada', 404);
    }
}
