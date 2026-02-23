<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MentorsQualifications;
use Illuminate\Http\Request;

class MentorsQualificationsController extends Controller
{
    // ===============================
    // Show Update Page
    // ===============================
    public function mentorsqualifications()
    {
        // Always ensure one record exists
        $qualifications = MentorsQualifications::first();

        return view('backend.mentor-quanlification.update-content', compact('qualifications'));
    }

    // ===============================
    // Submit / Update Content
    // ===============================
   public function Submitmentorsqualifications(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'title_bg' => 'nullable|string',
            'bg_img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'desc_1' => 'nullable|string',
            'desc_2' => 'nullable|string',
            'desc_3' => 'nullable|string',
            'desc_4' => 'nullable|string',
            'desc_5' => 'nullable|string',
            'desc_6' => 'nullable|string',
        ]);

        // Get first record or create new
        $qualifications = MentorsQualifications::first();
        if (!$qualifications) {
            $qualifications = new MentorsQualifications();
        }

        // ===============================
        // Save Text Fields
        // ===============================
        $qualifications->title = $request->title;
        $qualifications->description = $request->description;
        $qualifications->title_bg = $request->title_bg;
        $qualifications->desc_1 = $request->desc_1;
        $qualifications->desc_2 = $request->desc_2;
        $qualifications->desc_3 = $request->desc_3;
        $qualifications->desc_4 = $request->desc_4;
        $qualifications->desc_5 = $request->desc_5;
        $qualifications->desc_6 = $request->desc_6;

        $uploadPath = public_path('assets/qualifications');

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // ===============================
        // Background Image Upload
        // ===============================
        if ($request->hasFile('bg_img')) {

            if ($qualifications->bg_img && file_exists(public_path($qualifications->bg_img))) {
                unlink(public_path($qualifications->bg_img));
            }

            $file = $request->file('bg_img');
            $fileName = time() . '_main.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $fileName);

            $qualifications->bg_img = 'assets/qualifications/' . $fileName;
        }

        $qualifications->save();

        return redirect()->back()->with('success', 'Content updated successfully!');
    }
}
