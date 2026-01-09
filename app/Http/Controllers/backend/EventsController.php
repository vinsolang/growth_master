<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
     /**
     * Display all events
     */
    public function index()
    {
        $events = Events::all();
        return view('backend.event.view-event', compact('events'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('backend.event.add-event');
    }

    /**
     * Store new event
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'nullable|string|max:150',
            'description' => 'nullable|string',
            'event_date'  => 'nullable|date',
            'event_time'  => 'required|string',
            'event_type'  => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {

            // Create folder if not exists
            $path = public_path('assets/events');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // Generate unique filename
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

            // Move image to public/assets/events
            $request->image->move($path, $imageName);

            // Save relative path to DB
            $data['image'] = 'assets/events/' . $imageName;
        }

        Events::create($data);

        return redirect()
            ->route('event.index')
            ->with('success', 'Event created successfully.');
    }



    /**
     * View single event
     */
    public function show(Events $event)
    {
        return view('backend.event.view-event', compact('event'));
    }

    /**
     * Show edit form
     */
    public function edit(Events $event)
    {
        return view('backend.event.update-event', compact('event'));
    }

    /**
     * Update event
     */
    public function update(Request $request, Events $event)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'nullable|string|max:150',
            'description' => 'nullable|string',
            'event_date'  => 'nullable|date',
            'event_time'  => 'required',
            'event_type'  => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {

            // Delete old image if exists
            if ($event->image && file_exists(public_path($event->image))) {
                unlink(public_path($event->image));
            }

            // Ensure directory exists
            $path = public_path('assets/events');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // Generate new filename
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

            // Move new image
            $request->image->move($path, $imageName);

            // Save path to DB
            $data['image'] = 'assets/events/' . $imageName;
        }

        $event->update($data);

        return redirect()
            ->route('event.index')
            ->with('success', 'Event updated successfully.');
    }

    /**
     * Delete event
     */
    public function destroy(Events $event)
    {
        $event->delete();

        return redirect()
            ->route('event.index')
            ->with('success', 'Event deleted successfully.');
    }
}
