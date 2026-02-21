<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ReviewPageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewPageContentController extends Controller
{
    public function reviewcontent(){
        $getContent = ReviewPageContent::first();
        return view('backend.review.update-text', compact('getContent'));
    }

    public function SubmitReviewcontent(Request $request){
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',

            'title_card_1' => 'nullable|string',
            'desc_card_1' => 'nullable|string',
            'name_card_1' => 'nullable|string',
            'positioin_card_1' => 'nullable|string',

            'title_card_2' => 'nullable|string',
            'desc_card_2' => 'nullable|string',
            'name_card_2' => 'nullable|string',
            'positioin_card_2' => 'nullable|string',
            'profile_card_2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title_card_3' => 'nullable|string',
            'desc_card_3' => 'nullable|string',
            'name_card_3' => 'nullable|string',
            'positioin_card_3' => 'nullable|string',
            'profile_card_3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title_card_4' => 'nullable|string',
            'desc_card_4' => 'nullable|string',
            'name_card_4' => 'nullable|string',
            'positioin_card_4' => 'nullable|string',
        ]);

        $data = ReviewPageContent::first();
        if (!$data) {
            $data = new ReviewPageContent();
        }

        $uploadPath = public_path('assets/page-review');

// Create folder if not exists
if (!file_exists($uploadPath)) {
    mkdir($uploadPath, 0755, true);
}

// ===============================
// UPLOAD PROFILE CARD 2
// ===============================
if ($request->hasFile('profile_card_2')) {

    // Delete old image if exists
    if ($data->profile_card_2 && file_exists(public_path($data->profile_card_2))) {
        unlink(public_path($data->profile_card_2));
    }

    $file = $request->file('profile_card_2');
    $fileName = time() . '_card_2.' . $file->getClientOriginalExtension();
    $file->move($uploadPath, $fileName);

    $data->profile_card_2 = 'assets/page-review/' . $fileName;
}

// ===============================
// UPLOAD PROFILE CARD 3
// ===============================
if ($request->hasFile('profile_card_3')) {

    if ($data->profile_card_3 && file_exists(public_path($data->profile_card_3))) {
        unlink(public_path($data->profile_card_3));
    }

    $file = $request->file('profile_card_3');
    $fileName = time() . '_card_3.' . $file->getClientOriginalExtension();
    $file->move($uploadPath, $fileName);

    $data->profile_card_3 = 'assets/page-review/' . $fileName;
}

// ===============================
// UPDATE OTHER FIELDS
// ===============================
$data->fill($request->except(['profile_card_2', 'profile_card_3']));

$data->save();

return redirect()->back()->with('success', 'Page Review updated successfully!');
    }
}
