<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeComtentController extends Controller
{
    public function homeContent()
    {
        $getSectionHome = HomeContent::first();

        return view('backend.home-content.update-text', compact('getSectionHome'));
    }

    public function SubmitHomeContent(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',

            'title_card_1' => 'nullable|string|max:255',
            'title_card_2' => 'nullable|string|max:255',
            'title_card_3' => 'nullable|string|max:255',
            'title_card_4' => 'nullable|string|max:255',
            'title_card_5' => 'nullable|string|max:255',
            'title_card_6' => 'nullable|string|max:255',

            'desc_card_1' => 'nullable|string',
            'desc_card_2' => 'nullable|string',
            'desc_card_3' => 'nullable|string',
            'desc_card_4' => 'nullable|string',
            'desc_card_5' => 'nullable|string',
            'desc_card_6' => 'nullable|string',

            'title_1' => 'nullable|string|max:255',
            'description_1' => 'nullable|string',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'sub_title_event' => 'nullable|string|max:255',

            'title_event_1' => 'nullable|string|max:255',
            'title_event_2' => 'nullable|string|max:255',
            'title_event_3' => 'nullable|string|max:255',

            'desc_card_event_1' => 'nullable|string',
            'desc_card_event_2' => 'nullable|string',
            'desc_card_event_3' => 'nullable|string',

            'img_card_event_1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'img_card_event_2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'img_card_event_3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'desc_bolow' => 'nullable|string',
            'title_below' => 'nullable|string',
        ]);

        // Get existing record or create
        $homeContent = HomeContent::first() ?? new HomeContent;

        // Fill text fields
        $homeContent->fill($request->except([
            'image',
            'img_card_event_1',
            'img_card_event_2',
            'img_card_event_3',
        ]));

        // ===============================
        // IMAGE UPLOAD DIRECTORY
        // storage/app/public/home-content
        // ===============================

        $uploadPath = public_path('assets/home-content');

// Create folder if not exists
if (!file_exists($uploadPath)) {
    mkdir($uploadPath, 0755, true);
}

// ===============================
// MAIN IMAGE
// ===============================
if ($request->hasFile('image')) {

    if ($homeContent->image && file_exists(public_path($homeContent->image))) {
        unlink(public_path($homeContent->image));
    }

    $file = $request->file('image');
    $fileName = time() . '_main.' . $file->getClientOriginalExtension();
    $file->move($uploadPath, $fileName);

    $homeContent->image = 'assets/home-content/' . $fileName;
}

// ===============================
// EVENT IMAGES
// ===============================
for ($i = 1; $i <= 3; $i++) {

    $fieldName = "img_card_event_$i";

    if ($request->hasFile($fieldName)) {

        if ($homeContent->$fieldName && file_exists(public_path($homeContent->$fieldName))) {
            unlink(public_path($homeContent->$fieldName));
        }

        $file = $request->file($fieldName);
        $fileName = time() . "_event_$i." . $file->getClientOriginalExtension();
        $file->move($uploadPath, $fileName);

        $homeContent->$fieldName = 'assets/home-content/' . $fileName;
    }
}

$homeContent->save();

return redirect()->back()->with('success', 'Content updated successfully!');
    }
}
