<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class AboutGrowthControll extends Controller
{
    public function aboutGrowth(){
        $getBanner = Banner::all();
        return view('frontend.about.about', compact('getBanner'));
    }

    // What is Growth Master
    public function whatIsGrowthMaster(){
        
        return view('frontend.about.what-is-growth',);
    }
    //7 Laws of Leadership
    public function leaderShip(){
          $getBanner = Banner::all();
        return view('frontend.about.leadership-laws',compact('getBanner'));
    }

    // CEO Climp
    public function CeoClimp(){
          $getBanner = Banner::all();
        return view('frontend.about.ceo-climp',compact('getBanner'));
    }
}
