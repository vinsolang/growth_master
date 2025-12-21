<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutGrowthControll extends Controller
{
    public function aboutGrowth(){
        return view('frontend.about.about');
    }

    // What is Growth Master
    public function whatIsGrowthMaster(){
        return view('frontend.about.what-is-growth');
    }
    //7 Laws of Leadership
    public function leaderShip(){
        return view('frontend.about.leadership-laws');
    }
}
