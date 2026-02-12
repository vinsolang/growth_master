<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ApproachContent;
use Illuminate\Http\Request;

class AppraochContentController extends Controller
{
    public function approachcontent(){
        $getContent = ApproachContent::first();
        return view('backend.approachcontent.update-text', compact('getContent'));
    }

    public function SubmitApproachContent(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',

            'title_on_card' => 'nullable|string|max:255',

            'title_card_1' => 'nullable|string|max:255',
            'title_card_2' => 'nullable|string|max:255',
            'title_card_3' => 'nullable|string|max:255',

            'desc_card_1' => 'nullable|string',
            'desc_card_2' => 'nullable|string',
            'desc_card_3' => 'nullable|string',

            'title_1' => 'nullable|string|max:255',
            'content_1' => 'nullable|string',

            'title_2' => 'nullable|string|max:255',
            'content_2' => 'nullable|string',
        ]);

         // Get existing record or create once
        $getContent = ApproachContent::first();

        if (!$getContent) {
            $getContent = new ApproachContent();
        }
        // Update fields
        $getContent->fill($request->only([
            'title',
            'content',

            'title_on_card',

            'title_card_1',
            'title_card_2',
            'title_card_3',
            'desc_card_1',
            'desc_card_2',
            'desc_card_3',

            'title_1',
            'content_1',

            'title_2',
            'content_2',
        ]));

        $getContent->save();

        return redirect()->back()->with('success', 'Content updated successfully!');
    }
}
