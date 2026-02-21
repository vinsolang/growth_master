<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
       public function index()
    {
        // FIX: Standardized variable name to $contactUs for clarity
        $banner = Banner::all(); // Changed get() to all() - both work, but all() is often preferred for full retrieval.
        return view('backend.banner.view-banner', compact('banner'));
    }

    public function create()
    {
        return view('backend.banner.add-banner');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'content' => 'nullable|string|',
        'title' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Upload Image
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('assets/banner'), $imageName);

    // Save Data
    Banner::create([
        'title' => $request->title,
        'name' => $request->name,
        'content' => $request->content,
        'image' => $imageName,
    ]);

    return redirect()->route('banner.index')->with('success', 'Added successfully!');
}


    public function edit(Banner $banner)
    {
        return view('backend.banner.update-banner', compact('banner'));
    }

   public function update(Request $request, Banner $banner)
{
    $request->validate([
        'title' => 'required|string',
        'name' => 'nullable|string|',
        'content' => 'nullable|string|',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    //  If new image uploaded
    if ($request->hasFile('image')) {

        //  Delete old image
        if ($banner->image && file_exists(public_path('assets/banner/' . $banner->image))) {
            unlink(public_path('assets/banner/' . $banner->image));
        }

        //  Upload new image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/banner'), $imageName);

        $banner->image = $imageName;
    }

    //  Update text fields
    $banner->update([
        'title' => $request->title,
        'name' => $request->name,
        'content' => $request->content,
        // 'image' => $request->$imageName
    ]);

    return redirect()->route('banner.index')->with('success', 'Updated successfully!');
}

}
