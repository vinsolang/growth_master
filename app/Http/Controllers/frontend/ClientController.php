<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function ourApproach(){
        return view('frontend.membership.our-aproach');
    }
    public function memberShipPrograms(){
        return view('frontend.membership.our-program');
    }
     public function growthReview(){
        return view('frontend.membership.growth-review');
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
}
