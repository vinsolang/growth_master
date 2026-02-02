<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\HomeText;
use Illuminate\Http\Request;

class HomeTextController extends Controller
{
     public function index()
    {
        // FIX: Standardized variable name to $contactUs for clarity
        $hometexts = HomeText::all(); // Changed get() to all() - both work, but all() is often preferred for full retrieval.
        return view('backend.home-text.view-text', compact('hometexts'));
    }

    public function create()
    {
        return view('backend.home-text.add-text');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        HomeText::create($request->all());

        return redirect()->route('home-card.index')->with('success', 'Added successfully!');
    }

    public function edit(HomeText $hometext)
    {
        return view('backend.home-text.update-text', compact('hometext'));
    }

    public function update(Request $request, HomeText $hometext)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $hometext->update($request->all());

        return redirect()->route('home-card.index')->with('success', 'Updated successfully!');
    }

    // FIX: Renamed the parameter variable to $contact for consistency with edit/update methods
   
}
