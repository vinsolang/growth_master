<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PeerGroupContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeerGroupContentController extends Controller
{
    public function peergroupcontent(){
        $getContent = PeerGroupContent::first();
        return view('backend.peer-group.update-text', compact('getContent'));
    }

    public function SubmitPeerGroupContent(Request $request){
        $request->validate([

            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'description_1' => 'nullable|string',

            'table' => 'nullable|string',

            'title_2' => 'nullable|string',
            'description_2' => 'nullable|string',

            'img_card1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'desc_card1' => 'nullable|string',

            'img_card2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'desc_card2' => 'nullable|string',

            'title_t1' => 'nullable|string',
            'title_t2' => 'nullable|string',
            'title_t3' => 'nullable|string',
            'title_t4' => 'nullable|string',
            'title_t5' => 'nullable|string',

            'desc_t1' => 'nullable|string',
            'desc_t2' => 'nullable|string',
            'desc_t3' => 'nullable|string',
            'desc_t4' => 'nullable|string',
            'desc_t5' => 'nullable|string',

            'title_3' => 'nullable|string',
            'description_3' => 'nullable|string',

            'title_c1' => 'nullable|string',
            'title_c2' => 'nullable|string',
            'title_c3' => 'nullable|string',
            'title_c4' => 'nullable|string',
            'title_c5' => 'nullable|string',
            'title_c6' => 'nullable|string',

            'desc_c1' => 'nullable|string',
            'desc_c2' => 'nullable|string',
            'desc_c3' => 'nullable|string',
            'desc_c4' => 'nullable|string',
            'desc_c5' => 'nullable|string',
            'desc_c6' => 'nullable|string',

            'title_4' => 'nullable|string',
            'description_4' => 'nullable|string',

            'title_g1' => 'nullable|string',
            'title_g2' => 'nullable|string',
            'title_g3' => 'nullable|string',
            'title_g4' => 'nullable|string',
            'title_g5' => 'nullable|string',
            'title_g6' => 'nullable|string',

            'desc_g1' => 'nullable|string',
            'desc_g2' => 'nullable|string',
            'desc_g3' => 'nullable|string',
            'desc_g4' => 'nullable|string',
            'desc_g5' => 'nullable|string',
            'desc_g6' => 'nullable|string',

        ]);

        // Get existing record or create
        $peergroup = PeerGroupContent::first() ?? new PeerGroupContent;

        // Fill text fields
        $peergroup->fill($request->except([
            'img_card1',
            'img_card2',
        ]));

        // ===============================
        // IMAGE UPLOAD DIRECTORY
        // storage/app/public/home-content
        // ===============================

        $uploadPath = public_path('assets/peergroup');

// Create folder if not exists
if (!file_exists($uploadPath)) {
    mkdir($uploadPath, 0755, true);
}

// ===============================
// CARD 1
// ===============================
if ($request->hasFile('img_card1')) {

    if ($peergroup->img_card1 && file_exists(public_path($peergroup->img_card1))) {
        unlink(public_path($peergroup->img_card1));
    }

    $file = $request->file('img_card1');
    $fileName = time() . '_card1.' . $file->getClientOriginalExtension();
    $file->move($uploadPath, $fileName);

    $peergroup->img_card1 = 'assets/peergroup/' . $fileName;
}

// ===============================
// CARD 2
// ===============================
if ($request->hasFile('img_card2')) {

    if ($peergroup->img_card2 && file_exists(public_path($peergroup->img_card2))) {
        unlink(public_path($peergroup->img_card2));
    }

    $file = $request->file('img_card2');
    $fileName = time() . '_card2.' . $file->getClientOriginalExtension();
    $file->move($uploadPath, $fileName);

    $peergroup->img_card2 = 'assets/peergroup/' . $fileName;
}

$peergroup->save();

return redirect()->back()->with('success', 'Content updated successfully!');
    }
}
