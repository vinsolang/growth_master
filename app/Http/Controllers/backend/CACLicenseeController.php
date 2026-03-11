<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CACLicensee;

class CACLicenseeController extends Controller
{
    public function index()
    {
        $getContent = CACLicensee::first();

        return view('backend.apply-of-cac.licensee-update', compact('getContent'));
    }

    public function update(Request $request)
    {

        $data = CACLicensee::first();

        if (!$data) {
            $data = new CACLicensee();
        }

        $data->title_1 = $request->title_1;
        $data->desc_1 = $request->desc_1;
        $data->title_2 = $request->title_2;

        $data->t_1 = $request->t_1;
        $data->d_1 = $request->d_1;
        $data->t_2 = $request->t_2;
        $data->d_2 = $request->d_2;
        $data->t_3 = $request->t_3;
        $data->d_3 = $request->d_3;
        $data->t_4 = $request->t_4;
        $data->d_4 = $request->d_4;

        $data->title_3 = $request->title_3;
        $data->desc_3 = $request->desc_3;
        $data->desc_4 = $request->desc_4;
        $data->desc_5 = $request->desc_5;

        $data->title_meet = $request->title_meet;
        $data->desc_meet = $request->desc_meet;

        $data->name = $request->name;
        $data->position = $request->position;
        $data->desc_him = $request->desc_him;

        $data->title_final = $request->title_final;
        $data->desc_final = $request->desc_final;

        /*
        |--------------------------------
        | Upload Banner Image
        |--------------------------------
        */

        if ($request->hasFile('img')) {

            $file = $request->file('img');

            $filename = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('uploads/licensee'), $filename);

            $data->img = 'uploads/licensee/'.$filename;
        }

        /*
        |--------------------------------
        | Upload Profile Image
        |--------------------------------
        */

        if ($request->hasFile('profile')) {

            $file = $request->file('profile');

            $filename = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('uploads/licensee'), $filename);

            $data->profile = 'uploads/licensee/'.$filename;
        }

        $data->save();

        return redirect()->back()->with('success', 'Licensee Updated Successfully');
    }
}