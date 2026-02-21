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
            'title' => 'nullable|string',
            'description' => 'nullable|string',

            'title_1' => 'nullable|string',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'title_2' => 'nullable|string',
            'description_2' => 'nullable|string',

            'title_3' => 'nullable|string',
            'description_3' => 'nullable|string',

            'table' => 'nullable|string',
        ]);

         
    // Get existing record or create new
    $getContent = ProgramContent::first();
    if (!$getContent) {
        $getContent = new ProgramContent();
    }

    // Define upload path
$uploadPath = public_path('assets/program');

// Create folder if not exists
if (!file_exists($uploadPath)) {
    mkdir($uploadPath, 0755, true);
}

// ===============================
// HANDLE IMAGE UPLOAD
// ===============================
if ($request->hasFile('image')) {

    // Delete old image if exists
    if ($getContent->image && file_exists(public_path($getContent->image))) {
        unlink(public_path($getContent->image));
    }

    $file = $request->file('image');
    $fileName = time() . '_program.' . $file->getClientOriginalExtension();

    $file->move($uploadPath, $fileName);

    // Save relative path
    $getContent->image = 'assets/program/' . $fileName;
}

// ===============================
// UPDATE OTHER FIELDS
// ===============================
$getContent->fill($request->except('image'));

$getContent->save();

return redirect()->back()->with('success', 'Content updated successfully!');

    }
       
}
