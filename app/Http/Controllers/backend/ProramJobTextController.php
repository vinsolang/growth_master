<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProgramGuaranteed;
use App\Models\ProgramJobText;
use Illuminate\Http\Request;

class ProramJobTextController extends Controller
{
   public function programtext()
    {
        $programJobText = ProgramJobText::first() ?? new ProgramJobText();
        $programBlock   = ProgramGuaranteed::all();

        return view('backend.program-job.update-program-text',
            compact('programJobText', 'programBlock'));
    }
    public function SubmitProgramtext(Request $request){
        $request->validate([
            'title_page' => 'nullable|string',
            'desc_page' => 'nullable|string',
            'title_program' => 'nullable|string',
            'content_program' => 'nullable|string',
        ]);

         // Get existing record or create once
        $programJobText = ProgramJobText::first();

        if (!$programJobText) {
            $programJobText = new ProgramJobText();
        }
        // Update fields
        $programJobText->fill($request->only([
            'title_page',
            'desc_page',
            'title_program',
            'content_program'
        ]));

        $programJobText->save();

        return redirect()->back()->with('success', 'Content updated successfully!');
    }

}
