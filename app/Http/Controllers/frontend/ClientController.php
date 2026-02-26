<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyToBe;
use App\Models\ApproachContent;
use App\Models\Banner;
use App\Models\Events;
use App\Models\FAQs;
use App\Models\HelpSection;
use App\Models\HomeContent;
use App\Models\HowItWorks;
use App\Models\LeadGroup;
use App\Models\MentorsQualifications;
use App\Models\NavbarMenu;
use App\Models\PeerGroupContent;
use App\Models\Program;
use App\Models\ProgramContent;
use App\Models\ProgramGuaranteed;
use App\Models\ProgramJobText;
use App\Models\ReviewPageContent;
use App\Models\WhyJoinGrowthMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function ourApproach(){
        $showApproach = HowItWorks::all();
        $showHelpSection = HelpSection::all();
        $showFAQs = FAQs::all();
        $getBanner = Banner::all();
        $getContent = ApproachContent::all();
         $getHomeContent = HomeContent::all();
           $getMenu = NavbarMenu::all();
        return view('frontend.membership.our-aproach', compact(
            'showApproach', 
            'showHelpSection',
            'showFAQs',
            'getBanner',
            'getContent',
            'getHomeContent',
            'getMenu'
        ));
    }
    public function memberShipPrograms(){
        $showProgram = Program::all();
        $showFAQs = FAQs::all();
        $getBanner = Banner::all();
        $getContent = WhyJoinGrowthMaster::first();
        $getContentProgram = ProgramContent::all();
         $getHomeContent = HomeContent::all();
           $getMenu = NavbarMenu::all();
        return view('frontend.membership.our-program', compact('showProgram', 'showFAQs','getBanner','getContent','getContentProgram', 'getHomeContent', 'getMenu'));
    }
     public function growthReview(){    
        $showFAQs = FAQs::all();
        $getBanner = Banner::all();
        $getContent = ReviewPageContent::all();
         $getHomeContent = HomeContent::all();
           $getMenu = NavbarMenu::all();
        return view('frontend.membership.growth-review', compact('showFAQs', 'getBanner','getContent', 'getHomeContent', 'getMenu'));
    }
     public function ExclusivePeerGroups(){
        $getBanner = Banner::all();
        $getContent = PeerGroupContent::all();
        $getMenu = NavbarMenu::all();
        return view('frontend.membership.exclusive-peer-groups', compact('getBanner','getContent','getMenu'));
    }

    //  Event
     public function events(){
        $showEvents = Events::all();
        $getBanner = Banner::all();
        $getMenu = NavbarMenu::all();
        return view('frontend.events.event', compact('showEvents', 'getBanner', 'getMenu'));

    }
    public function ceoClimbEvents(){
        $getBanner = Banner::all();
         $getMenu = NavbarMenu::all();
        return view('frontend.events.ceo-clime-event', compact('getBanner', 'getMenu'));
    }
    public function researchCenterWebinar(){
          $getBanner = Banner::all();
           $getMenu = NavbarMenu::all();
        return view('frontend.events.growth-webinars', compact('getBanner','getMenu'));
    }
    // Become A member Ship
    public function membershipApplication(){
        $getBanner = Banner::all();
        $getContent = WhyJoinGrowthMaster::first();
         $getMenu = NavbarMenu::all();
        return view('frontend.becom-a-member.becom-member',compact('getBanner','getContent', 'getMenu'));
    }

    // Chair
    public function growthMasterChair(){
          $getBanner = Banner::all();
          $getCantent = LeadGroup::all();
          $getTextofForm = ApplyToBe::all();
           $getMenu = NavbarMenu::all();
        return view('frontend.chair.lead-group', compact('getBanner','getCantent','getTextofForm', 'getMenu'));
    }
    public function CEOCoachingQual(){
          $getBanner = Banner::all();
          $getContentQl = MentorsQualifications::all();
           $getMenu = NavbarMenu::all();
        return view('frontend.chair.chair-qualifition',compact('getBanner','getContentQl', 'getMenu'));
    }

     public function ChairProfile(){
       $getBanner = Banner::all();
        $getMenu = NavbarMenu::all();
        return view('frontend.chair.meet-our-growth', compact('getBanner', 'getMenu'));
    }
    
    public function memberShipGuaranteed(){
        $getBanner = Banner::all();
        $getTextProgram = ProgramJobText::all();
        $getProgramJob = ProgramGuaranteed::all();
         $getMenu = NavbarMenu::all();
        return view('frontend.program.job-program', compact('getBanner', 'getTextProgram', 'getProgramJob', 'getMenu'));
    }

    public function ProgramDetails($id){
        $getBanner = Banner::all();
        $programdetails = DB::table('program_guaranteed')->where('id', $id)->get();
         $getMenu = NavbarMenu::all();
        return view('frontend.program.program-details', compact('getBanner','programdetails','getMenu'));
    }
    

    public function ChairApplication(){
          $getBanner = Banner::all();
          $getContent = ApplyToBe::all();
           $getMenu = NavbarMenu::all();
        return view('frontend.chair.apply-to-growthmaster', compact('getBanner','getContent', 'getMenu'));
    }

    public function sitemap(){
        $getBanner = Banner::all();
         $getMenu = NavbarMenu::all();
        return view('components.sitemap', compact('getBanner', 'getMenu'));
    }

    // public function Membership($slug){
    //     $getBanner = Banner::where('slug', $slug)->get();
    //     return view('components.sitemap', compact('getBanner'));
    // }

    
}
