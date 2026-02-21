<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ApproachContent;
use App\Models\Banner;
use App\Models\Events;
use App\Models\FAQs;
use App\Models\HelpSection;
use App\Models\HomeContent;
use App\Models\HowItWorks;
use App\Models\PeerGroupContent;
use App\Models\Program;
use App\Models\ProgramContent;
use App\Models\ReviewPageContent;
use App\Models\WhyJoinGrowthMaster;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function ourApproach(){
        $showApproach = HowItWorks::all();
        $showHelpSection = HelpSection::all();
        $showFAQs = FAQs::all();
        $getBanner = Banner::all();
        $getContent = ApproachContent::all();
         $getHomeContent = HomeContent::all();
        return view('frontend.membership.our-aproach', compact(
            'showApproach', 
            'showHelpSection',
            'showFAQs',
            'getBanner',
            'getContent',
            'getHomeContent'
        ));
    }
    public function memberShipPrograms(){
        $showProgram = Program::all();
        $showFAQs = FAQs::all();
        $getBanner = Banner::all();
        $getContent = WhyJoinGrowthMaster::first();
        $getContentProgram = ProgramContent::all();
         $getHomeContent = HomeContent::all();
        return view('frontend.membership.our-program', compact('showProgram', 'showFAQs','getBanner','getContent','getContentProgram', 'getHomeContent'));
    }
     public function growthReview(){    
        $showFAQs = FAQs::all();
        $getBanner = Banner::all();
        $getContent = ReviewPageContent::all();
         $getHomeContent = HomeContent::all();
        return view('frontend.membership.growth-review', compact('showFAQs', 'getBanner','getContent', 'getHomeContent'));
    }
     public function ExclusivePeerGroups(){
        $getBanner = Banner::all();
        $getContent = PeerGroupContent::all();
        return view('frontend.membership.exclusive-peer-groups', compact('getBanner','getContent'));
    }

    //  Event
     public function events(){
        $showEvents = Events::all();
        $getBanner = Banner::all();
        return view('frontend.events.event', compact('showEvents', 'getBanner'));

    }
    public function ceoClimbEvents(){
          $getBanner = Banner::all();
        return view('frontend.events.ceo-clime-event', compact('getBanner'));
    }
    public function researchCenterWebinar(){
          $getBanner = Banner::all();
        return view('frontend.events.growth-webinars', compact('getBanner'));
    }
    // Become A member Ship
    public function membershipApplication(){
        $getBanner = Banner::all();
        $getContent = WhyJoinGrowthMaster::first();
        return view('frontend.becom-a-member.becom-member',compact('getBanner','getContent'));
    }

    // Chair
    public function growthMasterChair(){
          $getBanner = Banner::all();
        return view('frontend.chair.lead-group', compact('getBanner'));
    }
    public function CEOCoachingQual(){
          $getBanner = Banner::all();
        return view('frontend.chair.chair-qualifition',compact('getBanner'));
    }

     public function ChairProfile(){
       $getBanner = Banner::all();
        return view('frontend.chair.meet-our-growth', compact('getBanner'));
    }
    

    public function ChairApplication(){
          $getBanner = Banner::all();
        return view('frontend.chair.apply-to-growthmaster', compact('getBanner'));
    }

    public function sitemap(){
        $getBanner = Banner::all();
        return view('components.sitemap', compact('getBanner'));
    }
    
}
