<?php

namespace App\Http\Controllers\API;

use App\Models\tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function get(Request $request)
    {
        
        $tag = tag::with('articles')->get();

        if($tag)
            return ResponseFormater::success($tag, 'Data transaksi berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data transaksi tidak ada', 404);
    }
}
