<?php

namespace App\Http\Controllers;

use App\Models\articles;
use App\Models\skill;
use App\Models\education;
use App\Models\experience;
use App\Models\article;
use App\Models\project;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $skill1 = skill::where('id',1)->get();
        $skill2 = skill::where('id',2)->get();
        $skill3 = skill::where('id',3)->get();
        $skill4 = skill::where('id',4)->get();
        $skill5 = skill::where('id',5)->get();
        $skill6 = skill::where('id',6)->get();
        $skill7 = skill::where('id',7)->get();
        $skill8 = skill::where('id',8)->get();
        $skill9 = skill::where('id',9)->get();

        $education1 = education::where('id', 2)->get();
        $education2 = education::where('id', 3)->get();
        $education3 = education::where('id', 4)->get();

        $experience1 = experience::where('id', 1)->get();
        $experience2 = experience::where('id', 2)->get();
        $experience3 = experience::where('id', 3)->get();

        $project1 = project::where('id', 1)->get();

        return view('layouts.default')->with([
            'skill1'=>$skill1,
            'skill2'=>$skill2,
            'skill3'=>$skill3,
            'skill4'=>$skill4,
            'skill5'=>$skill5,
            'skill6'=>$skill6,
            'skill7'=>$skill7,
            'skill8'=>$skill8,
            'skill9'=>$skill9,

            'education1' => $education1,
            'education2' => $education2,
            'education3' => $education3,

            'experience1' => $experience1,
            'experience2' => $experience2,
            'experience3' => $experience3, 

            'project1' => $project1,
        ]);
    }

    public function oke()
    {
        $oke = project::where('id', 1)->get();
        // $image = base64_decode('photo');

        // base64_decode($oke->photo);
        return view('include.example')->with([
            'oke'=>$oke,
        ]);
    }
}
