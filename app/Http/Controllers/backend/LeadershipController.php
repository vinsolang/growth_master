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

            'title_card_1'=> 'nullable|string',
            'desc_card_1'=> 'nullable|string',
            'img_card_1'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title_card_2'=> 'nullable|string',
            'desc_card_2'=> 'nullable|string',
            'img_card_2'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title_1'=> 'nullable|string',
            'description_1'=> 'nullable|string',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Get first record or create
        $leaderships = Leadership::firstOrCreate([]);

        // Fill text fields only
        $leaderships->fill($request->except([
            'image',
            'img_card_1',
            'img_card_2'
        ]));

        $uploadPath = public_path('assets/leaderships');

// Create folder if not exists
if (!file_exists($uploadPath)) {
    mkdir($uploadPath, 0755, true);
}

// ===============================
// MAIN IMAGE
// ===============================
if ($request->hasFile('image')) {

    if ($leaderships->image && file_exists(public_path($leaderships->image))) {
        unlink(public_path($leaderships->image));
    }

    $file = $request->file('image');
    $fileName = time() . '_main.' . $file->getClientOriginalExtension();
    $file->move($uploadPath, $fileName);

    $leaderships->image = 'assets/leaderships/' . $fileName;
}

// ===============================
// CARD IMAGES
// ===============================
for ($i = 1; $i <= 2; $i++) {

    $fieldName = "img_card_$i";

    if ($request->hasFile($fieldName)) {

        if ($leaderships->$fieldName && file_exists(public_path($leaderships->$fieldName))) {
            unlink(public_path($leaderships->$fieldName));
        }

        $file = $request->file($fieldName);
        $fileName = time() . "_card_$i." . $file->getClientOriginalExtension();
        $file->move($uploadPath, $fileName);

        $leaderships->$fieldName = 'assets/leaderships/' . $fileName;
    }
}

$leaderships->save();

return redirect()->back()->with('success', 'Content updated successfully!');
    }
}