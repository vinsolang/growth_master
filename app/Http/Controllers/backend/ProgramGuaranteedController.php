<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProgramGuaranteed;
use App\Models\ProgramJobText;
use Illuminate\Http\Request;

class ProgramGuaranteedController extends Controller
{
      public function index()
    {
        // FIX: Standardized variable name to $contactUs for clarity
        $programJobText = ProgramJobText::first();
        $programBlock = ProgramGuaranteed::all(); // Changed get() to all() - both work, but all() is often preferred for full retrieval.
        return view('backend.program-job.update-program-text', compact('programBlock', 'programJobText'));
    }

    public function create()
    {
        $programJobText = ProgramJobText::first() ?? new ProgramJobText();
        $programBlock   = ProgramGuaranteed::all();

        return view('backend.program-job.add-block-program',
            compact('programJobText', 'programBlock'));
    }

 public function store(Request $request)
    {
        $request->validate([
            'title'=> 'nullable|string',
            'description'=> 'nullable|string',
            'img_card'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'img_details'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'desc_details' => 'nullable|string',
        ]);

        $imgCardName = null;
        $imgDetailsName = null;

        // Upload img_card
        if ($request->hasFile('img_card')) {
            $imgCardName = time().'_card.'.$request->img_card->extension();
            $request->img_card->move(public_path('assets/program_guaranteed'), $imgCardName);
        }

        // Upload img_details
        if ($request->hasFile('img_details')) {
            $imgDetailsName = time().'_details.'.$request->img_details->extension();
            $request->img_details->move(public_path('assets/program_guaranteed'), $imgDetailsName);
        }

        ProgramGuaranteed::create([
            'title'        => $request->title,
            'description'  => $request->description,
            'img_card'     => $imgCardName,
            'img_details'  => $imgDetailsName,
            'desc_details' => $request->desc_details
        ]);

        return redirect()->route('programtext')->with('success', 'Added successfully!');
    }


    public function edit(ProgramGuaranteed $job_guaranteed_program)
    {
        return view('backend.program-job.update-block-program', compact('job_guaranteed_program'));
    }

    public function update(Request $request, ProgramGuaranteed $job_guaranteed_program)
{
    $request->validate([
        'title'=> 'nullable|string',
        'description'=> 'nullable|string',
        'img_card'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'img_details'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'desc_details' => 'nullable|string',
    ]);

    // Update text fields first
    $job_guaranteed_program->title = $request->title;
    $job_guaranteed_program->description = $request->description;
    $job_guaranteed_program->desc_details = $request->desc_details;

    // ===============================
    // Update img_card
    // ===============================
    if ($request->hasFile('img_card')) {

        if ($job_guaranteed_program->img_card &&
            file_exists(public_path('assets/program_guaranteed/' . $job_guaranteed_program->img_card))) {
            unlink(public_path('assets/program_guaranteed/' . $job_guaranteed_program->img_card));
        }

        $img_cardName = time().'_card.'.$request->img_card->extension();
        $request->img_card->move(public_path('assets/program_guaranteed'), $img_cardName);

        $job_guaranteed_program->img_card = $img_cardName;
    }

    // ===============================
    // Update img_details
    // ===============================
    if ($request->hasFile('img_details')) {

        if ($job_guaranteed_program->img_details &&
            file_exists(public_path('assets/program_guaranteed/' . $job_guaranteed_program->img_details))) {
            unlink(public_path('assets/program_guaranteed/' . $job_guaranteed_program->img_details));
        }

        $img_detailsName = time().'_details.'.$request->img_details->extension();
        $request->img_details->move(public_path('assets/program_guaranteed'), $img_detailsName);

        $job_guaranteed_program->img_details = $img_detailsName;
    }

    $job_guaranteed_program->save();

    return redirect()->route('programtext')->with('success', 'Updated successfully!');
}



    // FIX: Renamed the parameter variable to $contact for consistency with edit/update methods
    public function destroy(ProgramGuaranteed $job_guaranteed_program)
    {
        $job_guaranteed_program->delete();
        return redirect()->route('programtext')->with('success', 'Deleted successfully!');
    }
}
