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

        // ===== Upload Profile Card 2 =====
        if ($request->hasFile('profile_card_2')) {

            if ($data->profile_card_2 && Storage::disk('public')->exists($data->profile_card_2)) {
                Storage::disk('public')->delete($data->profile_card_2);
            }

            $path2 = $request->file('profile_card_2')
                ->store('page-review', 'public');

            $data->profile_card_2 = $path2;
        }

        // ===== Upload Profile Card 3 =====
        if ($request->hasFile('profile_card_3')) {

            if ($data->profile_card_3 && Storage::disk('public')->exists($data->profile_card_3)) {
                Storage::disk('public')->delete($data->profile_card_3);
            }

            $path3 = $request->file('profile_card_3')
                ->store('page-review', 'public');

            $data->profile_card_3 = $path3;
        }

        // Fill other fields
        $data->fill($request->except(['profile_card_2','profile_card_3']));

        $data->save();

        return redirect()->back()->with('success', 'Page Review updated successfully!');
    }
}
