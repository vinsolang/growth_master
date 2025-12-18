<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\HowItWorks;
use Illuminate\Http\Request;

class HowItWorksController extends Controller
{
     public function index()
    {
        // FIX: Standardized variable name to $contactUs for clarity
        $howIsWorks = HowItWorks::all(); // Changed get() to all() - both work, but all() is often preferred for full retrieval.
        return view('backend.howItWorks.view-work', compact('howIsWorks'));
    }

    public function create()
    {
        return view('backend.howItWorks.add-work');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'button_text' => 'required|string|max:100',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Upload Image
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('assets/how_it_work'), $imageName);

    // Save Data
    HowItWorks::create([
        'title' => $request->title,
        'description' => $request->description,
        'button_text' => $request->button_text,
        'image' => $imageName,
    ]);

    return redirect()->route('work.index')->with('success', 'Added successfully!');
}


    public function edit(HowItWorks $work)
    {
        return view('backend.howItWorks.update-work', compact('work'));
    }

   public function update(Request $request, HowItWorks $work)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'button_text' => 'required|string|max:100',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    //  If new image uploaded
    if ($request->hasFile('image')) {

        //  Delete old image
        if ($work->image && file_exists(public_path('assets/how_it_work/' . $work->image))) {
            unlink(public_path('assets/how_it_work/' . $work->image));
        }

        //  Upload new image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/how_it_work'), $imageName);

        $work->image = $imageName;
    }

    //  Update text fields
    $work->update([
        'title' => $request->title,
        'description' => $request->description,
        'button_text' => $request->button_text,
    ]);

    return redirect()->route('work.index')->with('success', 'Updated successfully!');
}



    // FIX: Renamed the parameter variable to $contact for consistency with edit/update methods
    public function destroy(HowItWorks $work)
    {
        $work->delete();
        return redirect()->route('work.index')->with('success', 'Deleted successfully!');
    }
}
