<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BAccounting;
use Illuminate\Http\Request;

class BAccountingController extends Controller
{
     // ===============================
    // Show Update Page
    // ===============================
    public function BAccouting()
    {
        // Always ensure one record exists
        $ceo = BAccounting::firstOrCreate([]);

        return view('backend.about.update-baccounting', compact('ceo'));
    }

    // ===============================
    // Submit / Update Content
    // ===============================
    public function SubmitBAccount(Request $request)
{
    $request->validate([
        'description' => 'nullable|string',
        'title' => 'nullable|string',

        'title_card.*' => 'nullable|string',
        'desc_card.*' => 'nullable|string',
        'img_card.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $ceo = BAccounting::firstOrCreate([]);

    $uploadPath = public_path('assets/ceo');

    if (!file_exists($uploadPath)) {
        mkdir($uploadPath, 0755, true);
    }

    $titles = $request->title_card ?? [];
    $descs = $request->desc_card ?? [];
    $images = $ceo->img_card ?? [];

    foreach ($titles as $index => $title) {

        if ($request->hasFile("img_card.$index")) {

            $file = $request->file("img_card.$index");

            $fileName = time().'_'.$index.'.'.$file->getClientOriginalExtension();

            $file->move($uploadPath, $fileName);

            $images[$index] = 'assets/ceo/'.$fileName;
        }
    }

    $ceo->update([
        'description' => $request->description,
        'title' => $request->title,
        'title_card' => $titles,
        'desc_card' => $descs,
        'img_card' => $images,
    ]);

    return back()->with('success','Content updated successfully!');
}
}
