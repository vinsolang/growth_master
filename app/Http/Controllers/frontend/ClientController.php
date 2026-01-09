<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\FAQs;
use App\Models\HelpSection;
use App\Models\HowItWorks;
use App\Models\Program;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function ourApproach(){
        $showApproach = HowItWorks::all();
        $showHelpSection = HelpSection::all();
        $showFAQs = FAQs::all();
        return view('frontend.membership.our-aproach', compact(
            'showApproach', 
            'showHelpSection',
            'showFAQs'  
        ));
    }
    public function memberShipPrograms(){
        $showProgram = Program::all();
        $showFAQs = FAQs::all();
        return view('frontend.membership.our-program', compact('showProgram', 'showFAQs'));
    }
     public function growthReview(){
        $showFAQs = FAQs::all();
        return view('frontend.membership.growth-review', compact('showFAQs'));
    }
     public function ExclusivePeerGroups(){
        return view('frontend.membership.exclusive-peer-groups');
    }

    //  Event
     public function events(){
        return view('frontend.events.event');

    }
    public function ceoClimbEvents(){
        return view('frontend.events.ceo-clime-event');
    }
    public function researchCenterWebinar(){
        return view('frontend.events.growth-webinars');
    }
    // Become A member Ship
    public function membershipApplication(){
        return view('frontend.becom-a-member.becom-member');
    }

    // Chair
    public function growthMasterChair(){
        return view('frontend.chair.lead-group');
    }
    public function CEOCoachingQual(){
        return view('frontend.chair.chair-qualifition');
    }

     public function ChairProfile(){
        return view('frontend.chair.meet-our-growth');
    }
    

    public function ChairApplication(){
        return view('frontend.chair.apply-to-growthmaster');
    }

    
}
