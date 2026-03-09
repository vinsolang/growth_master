<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\EventType;
use Illuminate\Http\Request;

class EventTypeController extends Controller
{
   public function index()
{
    $eventstype = EventType::all();
    return view('backend.event.view-event', compact('eventstype'));
}

    public function update(Request $request)
    {
        foreach ($request->name as $key => $name) {

            $id = $request->id[$key] ?? null;

            $eventstype = $id ? EventType::find($id) : new EventType();

            $imagePath = $eventstype->image ?? null;

            if(isset($request->image[$key])){
                $imagePath = $request->image[$key]->store('eventstype','public');
            }

            $eventstype->title_event_1 = $request->title_event_1;
            $eventstype->title_event_2 = $request->title_event_2;
            $eventstype->name = $request->name[$key];
            $eventstype->type = $request->type[$key];
            $eventstype->title = $request->title[$key];
            $eventstype->description = $request->description[$key];
            $eventstype->image = $imagePath;

            $eventstype->save();
        }

        return back()->with('success','Updated successfully');
    }
}
