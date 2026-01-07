<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Approach;
use Illuminate\Http\Request;

class OurApproachController extends Controller
{
    // public function index()
    // {
    //     $approaches = Approach::orderBy('order')->get();
    //     return view('backend.our-approach.view-approach', compact('approaches'));
    // }

    // public function create()
    // {
    //     return view('backend.our-approach.add-approach');
    // }
    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'button_text' => 'nullable|string|max:255',
    //         'has_background' => 'nullable|boolean',
    //         'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    //     ]);

    //     // Upload image
    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->store('approach', 'public');
    //     }

    //     // Checkbox fallback
    //     $data['has_background'] = $request->has('has_background');

    //     \App\Models\Approach::create($data);

    //     return redirect()->back()->with('message', 'Approach added successfully');
    // }

    // public function edit(Approach $approach){
    //     return view('backend.our-approach.update-approach', compact('approach'));
    // }
    // public function update(Request $request, Approach $approach)
    // {
    //     $request->validate([
    //         'title'        => 'required|string|max:255',
    //         'description'  => 'required|string',
    //         'image'        => 'required|string',
    //         'button_text'  => 'nullable|string|max:255',
    //         'has_background' => 'boolean',
    //     ]);

    //     $approach->update($request->all());

    //     return redirect()->back()->with('success', 'Approach block updated');
    // }

    // public function destroy(Approach $approach)
    // {
    //     $approach->delete();
    //     return redirect()->back()->with('success', 'Approach block deleted');
    // }
}
