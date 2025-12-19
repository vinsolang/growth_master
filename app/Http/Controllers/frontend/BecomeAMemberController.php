<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BecomeAMemberController extends Controller
{
    public function PageSubmitSucess(){
        return view('frontend.becom-a-member.page-submit-becomemember-sucess');
    }
}
