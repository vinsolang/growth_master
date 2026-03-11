<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CACSponsor;

class CACSponsorController extends Controller
{

    public function index()
    {
        $getContent = CACSponsor::first();

        return view('backend.apply-of-cac.b-come-sponsor', compact('getContent'));
    }

    public function update(Request $request)
    {

        $data = CACSponsor::first();

        if (!$data) {
            $data = new CACSponsor();
        }

        $data->desc_1 = $request->desc_1;
        $data->title_1 = $request->title_1;

        $data->d_1 = $request->d_1;
        $data->d_2 = $request->d_2;
        $data->d_3 = $request->d_3;
        $data->d_4 = $request->d_4;
        $data->title_logo = $request->title_logo;

        $data->title_form = $request->title_form;

        /*
        |--------------------------------------------------------------------------
        | Upload Banner Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('img')) {

            $file = $request->file('img');

            $filename = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('uploads/sponsors'), $filename);

            $data->img = 'uploads/sponsors/'.$filename;
        }

        /*
        |--------------------------------------------------------------------------
        | Upload Multiple Logos
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('logo_img')) {

            $logos = [];

            foreach ($request->file('logo_img') as $file) {

                $filename = time().'_'.$file->getClientOriginalName();

                $file->move(public_path('uploads/sponsors'), $filename);

                $logos[] = 'uploads/sponsors/'.$filename;
            }

            $data->logo_img = $logos;
        }

        $data->save();

        return redirect()->back()->with('success', 'Sponsor Updated Successfully');
    }
}