<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
       public function about(){
        $about = AboutUs::first();
        return view('backend.about.update-what-is-growthmaster', compact('about'));
    }
    public function SubmitAbout(Request $request){
        $request->validate([
            'title'     => 'required|string',
            'desc'      => 'required|string',

            'title_v'   => 'nullable|string',
            'desc_v'    => 'nullable|string',

            'title_m'   => 'nullable|string',
            'desc_m'    => 'nullable|string',

            'title_c'   => 'nullable|string',

            'sub_t_1'   => 'nullable|string',
            'sub_t_2'   => 'nullable|string',
            'sub_t_3'   => 'nullable|string',
            'sub_t_4'   => 'nullable|string',
            'sub_t_5'   => 'nullable|string',

            'text_1'    => 'nullable|string',
            'text_2'    => 'nullable|string',
            'text_3'    => 'nullable|string',
            'text_4'    => 'nullable|string',
            'text_5'    => 'nullable|string',

            'title_1'   => 'nullable|string',
            'desc_2'    => 'nullable|string',
        ]);

         // Get existing record or create once
        $about = AboutUs::first();

        if (!$about) {
            $about = new AboutUs();
        }
        // Update fields
        $about->fill($request->only([
            'title',
           'desc',

           'title_v',
           'desc_v',

           'title_m',
           'desc_m',

           'title_c',
           'sub_t_1',
           'sub_t_2',
           'sub_t_3',
           'sub_t_4',
           'sub_t_5',
           'text_1',
           'text_2',
           'text_3',
           'text_4',
           'text_5',

           'title_1',
           'desc_2',
        ]));

        $about->save();

        return redirect()->back()->with('success', 'Content updated successfully!');
    }
}
