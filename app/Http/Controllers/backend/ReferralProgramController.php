<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReferralProgram;

class ReferralProgramController extends Controller
{

    public function index()
    {
        $getContent = ReferralProgram::first();

        return view('backend.apply-of-cac.referral-program', compact('getContent'));
    }


    public function update(Request $request)
    {

        $data = ReferralProgram::first();

        if (!$data) {
            $data = new ReferralProgram();
        }

        $data->desc_1 = $request->desc_1;

        /*
        |--------------------------------------------------------------------------
        | Upload Images JSON
        |--------------------------------------------------------------------------
        */

        $images = [];

        if ($request->hasFile('img_json')) {

            foreach ($request->file('img_json') as $file) {

                if ($file) {

                    $filename = time().'_'.$file->getClientOriginalName();

                    $file->move(public_path('uploads/referral'), $filename);

                    $images[] = 'uploads/referral/'.$filename;

                }

            }

        } else {

            $images = $data->img_json ?? [];

        }

        /*
        |--------------------------------------------------------------------------
        | Titles JSON
        |--------------------------------------------------------------------------
        */

        $titles = $request->title_json ?? [];

        $data->img_json = $images;
        $data->title_json = $titles;

        $data->save();

        return redirect()->back()->with('success', 'Referral Program Updated Successfully');
    }
}