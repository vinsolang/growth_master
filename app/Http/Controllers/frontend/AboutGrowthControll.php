<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\CEOClimb;
use App\Models\HomeContent;
use App\Models\Leadership;
use Illuminate\Http\Request;

class AboutGrowthControll extends Controller
{
    public function aboutGrowth(){
        $getBanner = Banner::all();
         $getHomeContent = HomeContent::all();
        $getContent = AboutUs::all();
        return view('frontend.about.about', compact('getBanner', 'getContent', 'getHomeContent'));
    }

    // What is Growth Master
    public function whatIsGrowthMaster(){
        
        return view('frontend.about.what-is-growth',);
    }
    //7 Laws of Leadership
    public function leaderShip(){
          $getBanner = Banner::all();
          $getCotentPage = Leadership::all();
           $getHomeContent = HomeContent::all();
        return view('frontend.about.leadership-laws',compact('getBanner','getCotentPage', 'getHomeContent'));
    }

    // CEO Climp
    public function CeoClimp(){
        $getItem = CEOClimb::all();
         $getHomeContent = HomeContent::all();
          $getBanner = Banner::all();
        return view('frontend.about.ceo-climp',compact('getBanner','getItem', 'getHomeContent'));
    }
}
