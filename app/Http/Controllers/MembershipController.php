<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Contact
            'firstname' => 'required|string|max:100',
            'lastname'  => 'required|string|max:100',
            'email'     => 'required|email|max:150',
            'phone'     => 'required|string|max:30',

            // Company
            'company' => 'required|string|max:150',
            'role'    => 'required|string|max:100',
            'staff'   => 'required|string|max:50',
            'source'  => 'nullable|string|max:50',
        ]);

        Membership::create($validated);

        //  redirect to thank you page
        return redirect()->route('success');
    }

    // Admin view (optional)
    public function index()
    {
        $memberships = Membership::latest()->get();
        return view('backend.becomAmember.view-submit', compact('memberships'));
    }

    public function destroy(Membership $membership)
    {
        $membership->delete();
        return back()->with('success', 'Deleted successfully');
    }
}
