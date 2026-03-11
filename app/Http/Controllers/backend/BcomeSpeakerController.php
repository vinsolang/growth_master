<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BcomeSpeaker;
use Illuminate\Http\Request;

class BcomeSpeakerController extends Controller
{
      public function index()
    {
        $getContent = BcomeSpeaker::first();
        return view('backend.apply-of-cac.become-a-speaker', compact('getContent'));
    }

    public function update(Request $request)
    {
        $content = BcomeSpeaker::first();

        if (!$content) {
            $content = new BcomeSpeaker();
        }

        $content->title_1 = $request->title_1;
        $content->desc_1  = $request->desc_1;

        $content->title_2 = $request->title_2;
        $content->text_json = json_encode($request->text_json);

        $content->title_3 = $request->title_3;

        // Combine card title + description
       $cards = [];

            if ($request->card_title) {
                foreach ($request->card_title as $key => $title) {

                    $cards[] = [
                        'title' => $title,
                        'desc'  => $request->card_desc[$key] ?? ''
                    ];

                }
            }

            $content->card_json = $cards;

        $content->desc_3 = $request->desc_3;

        $content->save();

        return redirect()->back()->with('success','Content updated successfully');
    }
}
