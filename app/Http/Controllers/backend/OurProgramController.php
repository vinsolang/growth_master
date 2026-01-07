<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class OurProgramController extends Controller
{
     public function index()
    {
        // FIX: Standardized variable name to $contactUs for clarity
        $programs = Program::all(); // Changed get() to all() - both work, but all() is often preferred for full retrieval.
        return view('backend.our-program.view-program', compact('programs'));
    }

    public function create()
    {
        return view('backend.our-program.add-program');
    }

    public function store(Request $request)
{
    $request->validate([
        'audience' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'button_text' => 'required|string|max:100',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Upload Image
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('assets/our_program'), $imageName);

    // Save Data
    Program::create([
        'audience' => $request->audience,
        'title' => $request->title,
        'description' => $request->description,
        'button_text' => $request->button_text,
        'image' => $imageName,
    ]);

    return redirect()->route('program.index')->with('success', 'Added successfully!');
}


    public function edit(Program $program)
    {
        return view('backend.our-program.update-program', compact('program'));
    }

   public function update(Request $request, Program $program)
{
    $request->validate([
        'audience' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'button_text' => 'required|string|max:100',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    //  If new image uploaded
    if ($request->hasFile('image')) {

        //  Delete old image
        if ($program->image && file_exists(public_path('assets/our_program/' . $program->image))) {
            unlink(public_path('assets/our_program/' . $program->image));
        }

        //  Upload new image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/our_program'), $imageName);

        $program->image = $imageName;
    }

    //  Update text fields
    $program->update([
        'audience' => $request->audience,
        'title' => $request->title,
        'description' => $request->description,
        'button_text' => $request->button_text,
    ]);

    return redirect()->route('program.index')->with('success', 'Updated successfully!');
}



    // FIX: Renamed the parameter variable to $contact for consistency with edit/update methods
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('program.index')->with('success', 'Deleted successfully!');
    }
}
