<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function get(Request $request)
    {
        $project = project::all();

        if($project)
            return ResponseFormater::success($project, 'Data transaksi berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data transaksi tidak ada', 404);
    }
}
