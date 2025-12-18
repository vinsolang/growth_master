<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\HelpSection;
use Illuminate\Http\Request;

class HelpSectionController extends Controller
{
     public function index()
    {
        // FIX: Standardized variable name to $contactUs for clarity
        $helpSections = HelpSection::all(); // Changed get() to all() - both work, but all() is often preferred for full retrieval.
        return view('backend.helpSection.view-help', compact('helpSections'));
    }

    public function create()
    {
        return view('backend.helpSection.add-help');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        HelpSection::create($request->all());

        return redirect()->route('helpsction.index')->with('success', 'Added successfully!');
    }

    public function edit(HelpSection $helpsction)
    {
        return view('backend.helpSection.update-help', compact('helpsction'));
    }

    public function update(Request $request, HelpSection $helpsction)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $helpsction->update($request->all());

        return redirect()->route('helpsction.index')->with('success', 'Updated successfully!');
    }

    // FIX: Renamed the parameter variable to $contact for consistency with edit/update methods
    public function destroy(HelpSection $helpsction)
    {
        $helpsction->delete();
        return redirect()->route('helpsction.index')->with('success', 'Deleted successfully!');
    }
}
