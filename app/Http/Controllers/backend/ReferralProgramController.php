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

    $oldImages = $data->img_json ?? [];
    $images = [];

foreach ($request->title_json as $index => $title) {

    if (isset($request->file('img_json')[$index])) {

        $file = $request->file('img_json')[$index];
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('uploads/referral'), $filename);

        $images[] = 'uploads/referral/'.$filename;

    } else {

        $images[] = $request->old_img_json[$index] ?? null;

    }

}

    $data->img_json = $images;
    $data->title_json = $request->title_json ?? [];

    $data->save();

    return redirect()->back()->with('success', 'Referral Program Updated Successfully');
}
}