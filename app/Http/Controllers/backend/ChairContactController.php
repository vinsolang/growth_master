<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ChairContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChairContactController extends Controller
{
    // 🔹 View all records
    public function index()
    {
        $contacts = ChairContact::latest()->paginate(20);

        return view('backend.chair-contact.index', compact('contacts'));
    }

    // 🔹 View single record
    public function show($id)
    {
        $contact = ChairContact::findOrFail($id);

        return view('backend.chair-contact.show', compact('contact'));
    }

    // 🔹 Store (your existing code)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'email' => 'nullable|email|max:150',
            'phone' => 'required|string|max:30',
            'member_status' => 'required|string',
            'executive_experience' => 'required|string',
            'staff' => 'required|string',
            'link' => 'nullable|url',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:20480', // 20MB
            'comment' => 'nullable|string|max:2000',
        ]);

        if ($request->hasFile('cv')) {
            $validated['cv'] = $request->file('cv')->store('resumes', 'public');
        }

        ChairContact::create($validated);

        return redirect()->route('success')->with('success', 'Form submitted successfully.');
    }

    // 🔹 Delete record
    public function destroy($id)
    {
        $contact = ChairContact::findOrFail($id);

        // Delete CV file if exists
        if ($contact->cv && Storage::disk('public')->exists($contact->cv)) {
            Storage::disk('public')->delete($contact->cv);
        }

        $contact->delete();

        return redirect()->route('chair.contact.index')
            ->with('success', 'Record deleted successfully.');
    }
}
