<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\HomeCard;
use Illuminate\Http\Request;

class HomeCardController extends Controller
{
        public function index()
    {
        // FIX: Standardized variable name to $contactUs for clarity
        $card = HomeCard::all(); // Changed get() to all() - both work, but all() is often preferred for full retrieval.
        return view('backend.homeCard.view-banner', compact('card'));
    }

    public function create()
    {
        return view('backend.homeCard.add-banner');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Upload Image
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('assets/card'), $imageName);

    // Save Data
    HomeCard::create([
        'title' => $request->title,
         'description' => $request->description,
        'image' => $imageName,
    ]);

    return redirect()->route('homecard.index')->with('success', 'Added successfully!');
}


    public function edit(HomeCard $card)
    {
        return view('backend.homeCard.update-banner', compact('card'));
    }

   public function update(Request $request, HomeCard $card)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    //  If new image uploaded
    if ($request->hasFile('image')) {

        //  Delete old image
        if ($card->image && file_exists(public_path('assets/card' . $card->image))) {
            unlink(public_path('assets/card/' . $card->image));
        }

        //  Upload new image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/card'), $imageName);

        $card->image = $imageName;
    }

    //  Update text fields
    $card->update([
        'title' => $request->title,
        'description' => $request->description,
        // 'image' => $request->$imageName
    ]);

    return redirect()->route('homecard.index')->with('success', 'Updated successfully!');
}
}
