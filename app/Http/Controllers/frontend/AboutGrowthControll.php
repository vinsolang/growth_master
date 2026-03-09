<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\BAccounting;
use App\Models\Banner;
use App\Models\CEOClimb;
use App\Models\HomeContent;
use App\Models\Leadership;
use App\Models\NavbarMenu;
use Illuminate\Http\Request;

class AboutGrowthControll extends Controller
{
    public function aboutGrowth(){
        $getBanner = Banner::all();
         $getHomeContent = HomeContent::all();
        $getContent = AboutUs::all();
         $getMenu = NavbarMenu::all();
        return view('frontend.about.about', compact('getBanner', 'getContent', 'getHomeContent','getMenu'));
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
           $getMenu = NavbarMenu::all();
        return view('frontend.about.leadership-laws',compact('getBanner','getCotentPage', 'getHomeContent', 'getMenu'));
    }

    // CEO Climp
    public function CeoClimp(){
        $getItem = CEOClimb::all();
         $getHomeContent = HomeContent::all();
          $getBanner = Banner::all();
           $getMenu = NavbarMenu::all();
        return view('frontend.about.ceo-climp',compact('getBanner','getItem', 'getHomeContent', 'getMenu'));
    }

    public function Baccounting(){
        $getBanner = Banner::all();
        $getMenu = NavbarMenu::all();
        $getItem = BAccounting::firstOrFail();
        $getHomeContent = HomeContent::all();
        return view('frontend.about.4b', compact('getMenu', 'getBanner', 'getItem', 'getHomeContent'));
    }
}
