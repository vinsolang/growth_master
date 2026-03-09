<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Leadership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeadershipController extends Controller
{
    // ===============================
    // Show Update Page
    // ===============================
    public function leaderships()
    {
        // Always ensure one record exists
        $leaderships = Leadership::firstOrCreate([]);

        return view('backend.about.update-leaderships', compact('leaderships'));
    }

    // ===============================
    // Submit / Update Content
    // ===============================
    public function SubmitLeaderships(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',

            'title_card.*' => 'nullable|string',
            'desc_card.*' => 'nullable|string',
            'img_card.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title_1' => 'nullable|string',
            'description_1' => 'nullable|string',
        ]);

        $leaderships = Leadership::firstOrCreate([]);

        $uploadPath = public_path('assets/leaderships');

        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $titles = $request->title_card ?? [];
        $descs = $request->desc_card ?? [];
        $images = $leaderships->img_card ?? [];

        foreach ($titles as $index => $title) {

            if ($request->hasFile("img_card.$index")) {

                $file = $request->file("img_card.$index");

                $fileName = time().'_'.$index.'.'.$file->getClientOriginalExtension();

                $file->move($uploadPath, $fileName);

                $images[$index] = 'assets/leaderships/'.$fileName;
            }
        }

        $leaderships->update([
            'description' => $request->description,
            'title_card' => $titles,
            'desc_card' => $descs,
            'img_card' => $images,

            'title_1' => $request->title_1,
            'description_1' => $request->description_1,
        ]);

        return back()->with('success','Content updated successfully!');
    }
}