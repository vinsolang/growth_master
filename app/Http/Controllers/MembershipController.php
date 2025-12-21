<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    // Store form data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname'    => 'required|string|max:100',
            'lastname'     => 'required|string|max:100',
            'email'        => 'required|email',
            'phone'        => 'required',
            'postal_code'  => 'required',
            'company'      => 'required',
            'role'         => 'required',
            'revenue'      => 'required',
            'name_refer' => 'required|string|max:100',
            'email_refer' => 'required|string|max:100',
        ]);

        Membership::create($validated);

        return redirect()->route('sucess');
    }

    // Admin dashboard
    public function index()
    {
        $members = Membership::latest()->get();
        return view('backend.becomAmember.view-submit', compact('members'));
    }

    // Delete
    public function destroy(Membership $membership)
    {
        $membership->delete();
        return back()->with('success', 'Deleted successfully');
    }
}
