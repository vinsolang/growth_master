<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\LeadGroup;
use Illuminate\Http\Request;

class LeadGroupController extends Controller
{
     // ===============================
    // Show Update Page
    // ===============================
    public function leadgroup()
    {
        // Always ensure one record exists
        $leadgroup = LeadGroup::first();

        return view('backend.mentors.update-lead-group', compact('leadgroup'));
    }

    // ===============================
    // Submit / Update Content
    // ===============================
    public function SubmitLeadgroup(Request $request)
    {
         $request->validate([
            // ===== Banner 1 =====
            'title_b_1' => 'required|string|max:255',
            'desc_b_1'  => 'required|string',
            'img_b_1'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            // ===== Banner 2 =====
            'title_b_2' => 'required|string|max:255',
            'desc_b_2'  => 'required|string',
            'img_b_2'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            // ===== Section 1 =====
            'title_1' => 'required|string|max:255',
            'desc_1'  => 'required|string',

            // ===== Card Details =====
            'title_cd_1' => 'required|string|max:255',
            'title_cd_2' => 'required|string|max:255',
            'title_cd_3' => 'required|string|max:255',
            'title_cd_4' => 'required|string|max:255',
            'title_cd_5' => 'required|string|max:255',
            'title_cd_6' => 'required|string|max:255',
            'title_cd_7' => 'required|string|max:255',

            'd_cd_1' => 'required|string',
            'd_cd_2' => 'required|string',
            'd_cd_3' => 'required|string',
            'd_cd_4' => 'required|string',
            'd_cd_5' => 'required|string',
            'd_cd_6' => 'required|string',
            'd_cd_7' => 'required|string',

            // ===== Section 2 =====
            'title_2' => 'required|string|max:255',
            'desc_2'  => 'required|string',

            // ===== t_t Section =====
            't_t_1' => 'required|string|max:255',
            't_t_2' => 'required|string|max:255',
            't_t_3' => 'required|string|max:255',
            't_t_4' => 'required|string|max:255',

            't_d_1' => 'required|string',
            't_d_2' => 'required|string',
            't_d_3' => 'required|string',
            't_d_4' => 'required|string',

            // ===== Section 3 =====
            'title_3' => 'required|string|max:255',
            'desc_3'  => 'required|string',

            // ===== t_c Section =====
            't_c_1' => 'required|string|max:255',
            't_c_2' => 'required|string|max:255',
            't_c_3' => 'required|string|max:255',
            't_c_4' => 'required|string|max:255',
            't_c_5' => 'required|string|max:255',

            'd_c_1' => 'required|string',
            'd_c_2' => 'required|string',
            'd_c_3' => 'required|string',
            'd_c_4' => 'required|string',
            'd_c_5' => 'required|string',

            // ===== Section 4 =====
            'title_4' => 'required|string|max:255',
            'desc_4'  => 'required|string',

            // ===== Background Section =====
            't_bg_1' => 'required|string|max:255',
            't_bg_2' => 'required|string|max:255',
            't_bg_3' => 'required|string|max:255',
            't_bg_4' => 'required|string|max:255',

            'd_bg_1' => 'required|string',
            'd_bg_2' => 'required|string',
            'd_bg_3' => 'required|string',
            'd_bg_4' => 'required|string',

            // ===== Section 5 =====
            'title_5' => 'required|string|max:255',
            'desc_5'  => 'required|string',

            // ===== Profile Section =====
            'name'       => 'required|string|max:255',
            'position'   => 'required|string|max:255',
            'desc_him'   => 'required|string',
            'profile_him'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            // ===== Video Section =====
            'vdo' => 'nullable|mimes:mp4,mov,avi,webm|max:20480',
            // OR if uploading video file:
            // 'vdo' => 'nullable|mimes:mp4,mov,avi|max:10240',

            'title_v' => 'required|string|max:255',
            'desc_v'  => 'required|string',
        ]);


        // Get first record or create
        $leadgroup = LeadGroup::firstOrCreate([]);

        // Fill text fields only
        $leadgroup->fill($request->except([
            'img_b_1',
            'img_b_2',
            'profile_him',
            'vdo',
        ]));

        $uploadPath = public_path('assets/leadgroup');

        // Create folder if not exists
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // ===============================
        // BANNER 1 IMAGE
        // ===============================
        if ($request->hasFile('img_b_1')) {

            if ($leadgroup->img_b_1 && file_exists(public_path($leadgroup->img_b_1))) {
                unlink(public_path($leadgroup->img_b_1));
            }

            $file = $request->file('img_b_1');
            $fileName = time().'_banner1_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move($uploadPath, $fileName);

            $leadgroup->img_b_1 = 'assets/leadgroup/' . $fileName;
        }
        // ===============================
        // BANNER 2 IMAGE
        // ===============================
        if ($request->hasFile('img_b_2')) {

            if ($leadgroup->img_b_2 && file_exists(public_path($leadgroup->img_b_2))) {
                unlink(public_path($leadgroup->img_b_2));
            }

            $file = $request->file('img_b_2');
            $fileName = time().'_banner2_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move($uploadPath, $fileName);

            $leadgroup->img_b_2 = 'assets/leadgroup/' . $fileName;
        }   
        // ===============================
        // PROFILE IMAGE
        // ===============================
        if ($request->hasFile('profile_him')) {

            if ($leadgroup->profile_him && file_exists(public_path($leadgroup->profile_him))) {
                unlink(public_path($leadgroup->profile_him));
            }

            $file = $request->file('profile_him');
            $fileName = time().'_profile_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move($uploadPath, $fileName);

            $leadgroup->profile_him = 'assets/leadgroup/' . $fileName;
        }
        // ===============================
        // VIDEO
        // ===============================
       if ($request->hasFile('vdo')) {

            if ($leadgroup->vdo && file_exists(public_path($leadgroup->vdo))) {
                unlink(public_path($leadgroup->vdo));
            }

            $file = $request->file('vdo');
            $fileName = time().'_video_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move($uploadPath, $fileName);

            $leadgroup->vdo = 'assets/leadgroup/' . $fileName;
        }
        // ===============================
        // CARD IMAGES
        // ===============================
        for ($i = 1; $i <= 4; $i++) {

            $fieldName = "img_card_$i";

            if ($request->hasFile($fieldName)) {

                if ($leadgroup->$fieldName && file_exists(public_path($leadgroup->$fieldName))) {
                    unlink(public_path($leadgroup->$fieldName));
                }

                $file = $request->file($fieldName);
                $fileName = time() . "_card_$i." . $file->getClientOriginalExtension();
                $file->move($uploadPath, $fileName);

                $leadgroup->$fieldName = 'assets/leadgroup/' . $fileName;
            }
        }

        $leadgroup->save();

        return redirect()->back()->with('success', 'Content updated successfully!');
    }
}
