<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\HomeText;
use Illuminate\Http\Request;

class HomeTextController extends Controller
{
    public function index()
    {
        $hometext = HomeText::all();
        return view('backend.home-text.view-text', compact('hometext'));
    }

    public function create()
    {
        return view('backend.home-text.add-text');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        HomeText::create($request->only('title', 'description'));

        return redirect()->route('htext.index')->with('success', 'Added successfully!');
    }

    public function edit(HomeText $hometext)
    {
        return view('backend.home-text.update-text', compact('hometext'));
    }

  public function update(Request $request, HomeText $hometext) 
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
    ]);

    $hometext->update([
        'title' => $request->title,
        'description' => $request->description,
    ]);

    return redirect()->route('htext.index')->with('success', 'Updated successfully!');
}

    public function destroy(HomeText $hometext)
    {
        $hometext->delete();

        return redirect()->route('htext.index')->with('success', 'Deleted successfully!');
    }
   
}
