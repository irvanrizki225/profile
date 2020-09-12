<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function get(Request $request)
    {
        $article = article::all();

        if($article)
            return ResponseFormater::success($article, 'Data transaksi berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data transaksi tidak ada', 404);
    }
}
