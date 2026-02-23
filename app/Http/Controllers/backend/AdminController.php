<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\NavbarMenu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $getMenu = NavbarMenu::all();
        return view('backend.welcome', compact('getMenu'));
    }
}
