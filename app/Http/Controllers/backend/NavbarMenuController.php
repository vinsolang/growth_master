<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\NavbarMenu;
use Illuminate\Http\Request;

class NavbarMenuController extends Controller
{
    public function menu(){
        $menu = NavbarMenu::first();
        return view('backend.menu.update-menu', compact('menu'));
    }
    public function SubmitMenu(Request $request){
       $request->validate([
        'menu_1'  => 'nullable|string|max:255',
        'menu_2'  => 'nullable|string|max:255',
        'menu_3'  => 'nullable|string|max:255',
        'menu_4'  => 'nullable|string|max:255',
        'menu_5'  => 'nullable|string|max:255',
        'menu_6'  => 'nullable|string|max:255',
        'menu_7'  => 'nullable|string|max:255',
        'menu_8'  => 'nullable|string|max:255',
        'menu_9'  => 'nullable|string|max:255',
        'menu_10' => 'nullable|string|max:255',
        'menu_11' => 'nullable|string|max:255',
        'menu_12' => 'nullable|string|max:255',
        'menu_13' => 'nullable|string|max:255',
        'menu_14' => 'nullable|string|max:255',
        'menu_15' => 'nullable|string|max:255',
        'menu_16' => 'nullable|string|max:255',
        'menu_17' => 'nullable|string|max:255',
        'menu_18' => 'nullable|string|max:255',
        'menu_19' => 'nullable|string|max:255',
        'menu_20' => 'nullable|string|max:255',
    ]);

         // Get existing record or create once
        $menu = NavbarMenu::first();

        if (!$menu) {
            $menu = new NavbarMenu();
        }
        // Update fields
        $menu->fill($request->only([
             'menu_1',
            'menu_2',
            'menu_3',
            'menu_4',
            'menu_5',
            'menu_6',
            'menu_7',
            'menu_8',
            'menu_9',
            'menu_10',
            'menu_11',
            'menu_12',
            'menu_13',
            'menu_14',
            'menu_15',
            'menu_16',
            'menu_17',
            'menu_18',
            'menu_19',
            'menu_20',
        ]));

        $menu->save();

        return redirect()->back()->with('success', value: 'Menu updated successfully!');
    }
}
