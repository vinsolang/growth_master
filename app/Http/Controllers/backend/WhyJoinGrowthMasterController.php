<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\WhyJoinGrowthMaster;
use Illuminate\Http\Request;

class WhyJoinGrowthMasterController extends Controller
{
    public function whyjoin(){
        $whyJoin = WhyJoinGrowthMaster::first();
        return view('backend.why-join-growth.update', compact('whyJoin'));
    }
    public function Submitwhyjoin(Request $request){
        $request->validate([
            'content' => 'nullable|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',

            'title_1' => 'nullable|string',
            'description_1' => 'nullable|string',

            'table' => 'nullable|string',
            'text' => 'nullable|string',

            'title_2' => 'nullable|string',
            'description_3' => 'nullable|string',

            'title_card_1' => 'nullable|string',
            'title_card_2' => 'nullable|string',
            'title_card_3' => 'nullable|string',

            'desc_card_1' => 'nullable|string',
            'desc_card_2' => 'nullable|string',
            'desc_card_3' => 'nullable|string',
        ]);

         // Get existing record or create once
        $whyJoin = WhyJoinGrowthMaster::first();

        if (!$whyJoin) {
            $whyJoin = new WhyJoinGrowthMaster();
        }
        // Update fields
        $whyJoin->fill($request->only([
            'content',
            'title',
            'description',
            'title_1',
            'description_1',
            'table',
            'text',
            'title_2',
            'description_3',
            'title_card_1',
            'title_card_2',
            'title_card_3',
            'desc_card_1',
            'desc_card_2',
            'desc_card_3',
        ]));

        $whyJoin->save();

        return redirect()->back()->with('success', 'Content updated successfully!');
    }

}
