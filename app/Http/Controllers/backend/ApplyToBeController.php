<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ApplyToBe;
use Illuminate\Http\Request;

class ApplyToBeController extends Controller
{
    // ===============================
    // Show Update Page
    // ===============================
    public function apply()
    {
        // Always ensure one record exists
        $apply = ApplyToBe::first();

        return view('backend.mentors.apply-to-be', compact('apply'));
    }

    // ===============================
    // Submit / Update Content
    // ===============================
   public function Submitapply(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'desc_list' => 'nullable|string',
            
        ]);

        // Get first record or create new
        $apply = ApplyToBe::first();
        if (!$apply) {
            $apply = new ApplyToBe();
        }

        // ===============================
        // Save Text Fields
        // ===============================
        $apply->title = $request->title;
        $apply->description = $request->description;
        $apply->desc_list = $request->desc_list;

       
        $apply->save();

        return redirect()->back()->with('success', 'Content updated successfully!');
    }
}
