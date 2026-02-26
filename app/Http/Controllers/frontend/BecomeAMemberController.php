<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use App\Models\NavbarMenu;
use Illuminate\Http\Request;

class BecomeAMemberController extends Controller
{
    public function PageSubmitSucess(){
        return view('frontend.becom-a-member.page-submit-becomemember-sucess');
    }
    public function FormInputInfo(){
         $getHomeContent = HomeContent::all();
          $getMenu = NavbarMenu::all();
        return view('frontend.form-input-information.form', compact('getHomeContent', 'getMenu'));
    }
}
