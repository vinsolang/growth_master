<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProgramContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramContentController extends Controller
{
    public function programcontent(){
        $getContent = ProgramContent::first();
        return view('backend.programcontent.update-text', compact('getContent'));
    }

    public function SubmitProgramContent(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',

            'title_1' => 'nullable|string|max:255',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title_2' => 'nullable|string|max:255',
            'description_2' => 'nullable|string',

            'title_3' => 'nullable|string|max:255',
            'description_3' => 'nullable|string',

            'table' => 'nullable|string',
        ]);

         
    // Get existing record or create new
    $getContent = ProgramContent::first();
    if (!$getContent) {
        $getContent = new ProgramContent();
    }

    // Handle Image Upload
    if ($request->hasFile('image')) {

        //  Delete old image if exists
        if ($getContent->image && Storage::disk('public')->exists($getContent->image)) {
            Storage::disk('public')->delete($getContent->image);
        }

        // Store new image
        $imagePath = $request->file('image')->store('program', 'public');

        // Save new image path
        $getContent->image = $imagePath;
    }

    // Update other fields
    $getContent->fill($request->except('image'));

    $getContent->save();

        return redirect()->back()->with('success', 'Content updated successfully!');

    }
       
}
