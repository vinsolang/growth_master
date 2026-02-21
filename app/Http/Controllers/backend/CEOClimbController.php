<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CEOClimb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CEOClimbController extends Controller
{
     // ===============================
    // Show Update Page
    // ===============================
    public function c_e_o_climbs()
    {
        // Always ensure one record exists
        $ceo = CEOClimb::firstOrCreate([]);

        return view('backend.about.update-ceoClimb', compact('ceo'));
    }

    // ===============================
    // Submit / Update Content
    // ===============================
    public function Submitc_e_o_climbs(Request $request)
    {
        $request->validate([
            'description' => 'nullable|string',
            'title' => 'nullable|string',

            'title_card_1'=> 'nullable|string',
            'desc_card_1'=> 'nullable|string',
            'img_card_1'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title_card_2'=> 'nullable|string',
            'desc_card_2'=> 'nullable|string',
            'img_card_2'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title_card_3'=> 'nullable|string',
            'desc_card_3'=> 'nullable|string',
            'img_card_3'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
           
        ]);

        // Get first record or create
        $ceo = CEOClimb::firstOrCreate([]);

        // Fill text fields only
        $ceo->fill($request->except([
            'img_card_3',
            'img_card_1',
            'img_card_2'
        ]));

        $uploadPath = public_path('assets/ceo');

        // Create folder if not exists
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // ===============================
        // MAIN IMAGE
        // ===============================
        if ($request->hasFile('image')) {

            if ($ceo->image && file_exists(public_path($ceo->image))) {
                unlink(public_path($ceo->image));
            }

            $file = $request->file('image');
            $fileName = time() . '_main.' . $file->getClientOriginalExtension();
            $file->move($uploadPath, $fileName);

            $ceo->image = 'assets/ceo/' . $fileName;
        }

        // ===============================
        // CARD IMAGES
        // ===============================
        for ($i = 1; $i <= 3; $i++) {

            $fieldName = "img_card_$i";

            if ($request->hasFile($fieldName)) {

                if ($ceo->$fieldName && file_exists(public_path($ceo->$fieldName))) {
                    unlink(public_path($ceo->$fieldName));
                }

                $file = $request->file($fieldName);
                $fileName = time() . "_card_$i." . $file->getClientOriginalExtension();
                $file->move($uploadPath, $fileName);

                $ceo->$fieldName = 'assets/ceo/' . $fileName;
            }
        }

        $ceo->save();

        return redirect()->back()->with('success', 'Content updated successfully!');
    }
}
