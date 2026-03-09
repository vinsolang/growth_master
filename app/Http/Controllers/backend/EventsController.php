<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\EventType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventsController extends Controller
{
     /**
     * Display all events
     */
    public function index()
    {
         $eventstype = EventType::all();
        $events = Events::orderBy('created_at', 'desc')->get();
        return view('backend.event.view-event', compact('events', 'eventstype'));
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
    {    //  'desc_of_event' =>  'nullable|date',
        // 'title_of_event' =>  'nullable|date',
        $request->validate([

    // Main Event
    'title'       => 'required|string|max:255',
    'category'    => 'nullable|string|max:150',
    'description' => 'nullable|string',
    'title_breakout' => 'nullable|string',
    'event_date'  => 'nullable|date',
    'event_time'  => 'required|string|max:100',
    'event_type'  => 'required|string|max:100',
    'link'        => 'required|url',

    'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

    // Overview
    'title_overview'       => 'nullable|string|max:255',
    'description_overview' => 'nullable|string',
    'img_details'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

    'content_card_1' => 'nullable|string',
    'content_card_2' => 'nullable|string',
    'content_card_3' => 'nullable|string',
    'content_card_4' => 'nullable|string',

    'desc_overview' => 'nullable|string',

    // Images max 3
    'img_limit_3'   => 'nullable|array|max:3',
    'img_limit_3.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',

    // Speakers
    'title_details' => 'nullable|string',

    'name_details'       => 'nullable|array',
    'name_details.*'     => 'nullable|string|max:255',

    'position_details'   => 'nullable|array',
    'position_details.*' => 'nullable|string',

    'bio_details'        => 'nullable|array',
    'bio_details.*'      => 'nullable|string',

    'profile_image'      => 'nullable|array',
    'profile_image.*'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

    // Agenda
    'title_agenda' => 'nullable|string|max:255',

    'agenda_items'   => 'nullable|array',
    'agenda_items.*' => 'nullable|array',

    // Breakout
    'breakout_items'   => 'nullable|array',
    'breakout_items.*' => 'nullable|array',

    // Sponsors
    'title_sponsor'   => 'nullable|string|max:255',

    'sponsor_logos'   => 'nullable|array',
    'sponsor_logos.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',

    // Location
    'title_location' => 'nullable|string|max:255',
    'location_link'  => 'nullable|url',

]);

        $data = $request->except('image');
        $data['slug'] = Str::slug($request->title);


        // =============================
        // Upload img_details
        // =============================
        if ($request->hasFile('img_details')) {

            $name = time().'_'.$request->img_details->getClientOriginalName();
            $request->img_details->move(public_path('assets/events'), $name);

            $data['img_details'] = 'assets/events/'.$name;
        }


        // =============================
        // Upload max 3 images
        // =============================
        $images = [];

        if ($request->hasFile('img_limit_3')) {

            foreach ($request->file('img_limit_3') as $img) {

                $name = time().'_'.$img->getClientOriginalName();
                $img->move(public_path('assets/events'), $name);

                $images[] = 'assets/events/'.$name;
            }

        }

        $data['img_limit_3'] = $images;


        // =============================
        // Speaker profile images
        // =============================

        $profileImages = [];

        if ($request->hasFile('profile_image')) {

            foreach ($request->file('profile_image') as $img) {

                $name = time().'_'.$img->getClientOriginalName();
                $img->move(public_path('assets/events'), $name);

                $profileImages[] = 'assets/events/'.$name;
            }

        }

        $data['profile_image'] = $profileImages;

        $breakoutItems = $request->breakout_items ?? [];

        foreach ($breakoutItems as $index => $item) {
            // Check if a file exists for this index
            if ($request->hasFile("breakout_items.$index.profile")) {
                $file = $request->file("breakout_items.$index.profile");
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('assets/events'), $filename);
                $breakoutItems[$index]['profile'] = 'assets/events/'.$filename;
            } else {
                // If no file uploaded, keep existing or null
                $breakoutItems[$index]['profile'] = $item['profile'] ?? null;
            }
        }

        $data['breakout_items'] = $breakoutItems;

        // =============================
        // Sponsor logos
        // =============================

        $sponsors = [];

        if ($request->hasFile('sponsor_logos')) {

            foreach ($request->file('sponsor_logos') as $img) {

                $name = time().'_'.$img->getClientOriginalName();
                $img->move(public_path('assets/events'), $name);

                $sponsors[] = 'assets/events/'.$name;
            }

        }

        $data['sponsor_logos'] = $sponsors;


        // =============================
        // Save arrays
        // =============================

        $data['name_details'] = $request->name_details;
        $data['position_details'] = $request->position_details;
        $data['bio_details'] = $request->bio_details;

        $data['agenda_items'] = $request->agenda_items;
        $data['breakout_items'] = $request->breakout_items;

        // Events::create($data);

        $data['title_details'] = $request->title_details ?? null;

        $data['name_details'] = !empty($request->name_details) 
            ? array_filter($request->name_details) 
            : [];

        $data['position_details'] = !empty($request->position_details) 
            ? array_filter($request->position_details) 
            : [];

        $data['bio_details'] = !empty($request->bio_details) 
            ? array_filter($request->bio_details) 
            : [];

        $data['agenda_items'] = !empty($request->agenda_items) 
            ? array_filter($request->agenda_items) 
            : [];

        $data['breakout_items'] = !empty($request->breakout_items) 
            ? array_filter($request->breakout_items) 
            : [];

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
        'title_breakout' => 'nullable|string',
        'event_date'  => 'nullable|date',
        'event_time'  => 'required|string|max:100',
        'event_type'  => 'required|string|max:100',
        'link'        => 'required|url',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        // Overview
        'title_overview'       => 'nullable|string|max:255',
        'description_overview' => 'nullable|string',
        'img_details'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        'content_card_1' => 'nullable|string',
        'content_card_2' => 'nullable|string',
        'content_card_3' => 'nullable|string',
        'content_card_4' => 'nullable|string',
        'desc_overview'  => 'nullable|string',

        // Images max 3
        'img_limit_3'   => 'nullable|array|max:3',
        'img_limit_3.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',

        // Speakers
        'title_details'       => 'nullable|string',

        'name_details'        => 'nullable|array',
        'name_details.*'      => 'nullable|string|max:255',
        'position_details'    => 'nullable|array',
        'position_details.*'  => 'nullable|string',
        'bio_details'         => 'nullable|array',
        'bio_details.*'       => 'nullable|string',
        'profile_image'       => 'nullable|array',
        'profile_image.*'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        // Agenda
        'title_agenda'       => 'nullable|string|max:255',
        'agenda_items'       => 'nullable|array',
        'agenda_items.*'     => 'nullable|array',

        // Breakout
        // 'title_breakout'      => 'nullable|string',
        'breakout_items'      => 'nullable|array',
        'breakout_items.*'    => 'nullable|array',

        // Sponsors
        'title_sponsor'       => 'nullable|string|max:255',
        'sponsor_logos'       => 'nullable|array',
        'sponsor_logos.*'     => 'image|mimes:jpg,jpeg,png,webp|max:2048',

        // Location
        'title_location'      => 'nullable|string|max:255',
        'location_link'       => 'nullable|url',
    ]);

    $data = $request->except('image', 'img_details', 'img_limit_3', 'profile_image', 'sponsor_logos', 'breakout_items');

    // =============================
    // Main image
    // =============================
    if ($request->hasFile('image')) {
        if ($event->image && file_exists(public_path($event->image))) unlink(public_path($event->image));
        $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/events'), $imageName);
        $data['image'] = 'assets/events/' . $imageName;
    }

    // =============================
    // img_details
    // =============================
    if ($request->hasFile('img_details')) {
        if ($event->img_details && file_exists(public_path($event->img_details))) unlink(public_path($event->img_details));
        $name = time().'_'.$request->img_details->getClientOriginalName();
        $request->img_details->move(public_path('assets/events'), $name);
        $data['img_details'] = 'assets/events/'.$name;
    }

    // =============================
    // img_limit_3
    // =============================
    $images = $event->img_limit_3 ?? [];
    if ($request->hasFile('img_limit_3')) {
        $images = [];
        foreach ($request->file('img_limit_3') as $img) {
            $name = time().'_'.$img->getClientOriginalName();
            $img->move(public_path('assets/events'), $name);
            $images[] = 'assets/events/'.$name;
        }
    }
    $data['img_limit_3'] = $images;

    // =============================
    // Speaker profile images
    // =============================
    $profileImages = $event->profile_image ?? [];

    if ($request->hasFile('profile_image')) {

        foreach ($request->file('profile_image') as $index => $img) {

            if ($img) {

                $name = time().'_'.$img->getClientOriginalName();
                $img->move(public_path('assets/events'), $name);

                $profileImages[$index] = 'assets/events/'.$name;
            }

        }
    }

    $data['profile_image'] = $profileImages;

    // =============================
    // Breakout items
    // =============================
    $breakoutItems = $request->breakout_items ?? [];

    foreach ($breakoutItems as $index => $item) {

        // keep old image if exists
        $oldProfile = $event->breakout_items[$index]['profile'] ?? null;

        if(isset($event->breakout_items[$index]['profile'])){
            $oldProfile = $event->breakout_items[$index]['profile'];
        }

        if ($request->hasFile("breakout_items.$index.profile")) {

            $file = $request->file("breakout_items.$index.profile");
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('assets/events'), $filename);

            $breakoutItems[$index]['profile'] = 'assets/events/'.$filename;

        } else {

            $breakoutItems[$index]['profile'] = $oldProfile;

        }

    }
    // $breakoutItems = $request->breakout_items ?? $event->breakout_items ?? [];
    // foreach ($breakoutItems as $index => $item) {
    //     if ($request->hasFile("breakout_items.$index.profile")) {
    //         $file = $request->file("breakout_items.$index.profile");
    //         $filename = time().'_'.$file->getClientOriginalName();
    //         $file->move(public_path('assets/events'), $filename);
    //         $breakoutItems[$index]['profile'] = 'assets/events/'.$filename;
    //     } else {
    //         $breakoutItems[$index]['profile'] = $item['profile'] ?? $event->breakout_items[$index]['profile'] ?? null;
    //     }
    // }
    $data['breakout_items'] = $breakoutItems;

    // =============================
    // Sponsor logos
    // =============================
    $sponsors = $event->sponsor_logos ?? [];
    if ($request->hasFile('sponsor_logos')) {
        $sponsors = [];
        foreach ($request->file('sponsor_logos') as $img) {
            $name = time().'_'.$img->getClientOriginalName();
            $img->move(public_path('assets/events'), $name);
            $sponsors[] = 'assets/events/'.$name;
        }
    }
    $data['sponsor_logos'] = $sponsors;

    // =============================
    // Arrays
    // =============================
    $data['name_details']      = array_filter($request->name_details ?? $event->name_details ?? []);
    $data['position_details']  = array_filter($request->position_details ?? $event->position_details ?? []);
    $data['bio_details']       = array_filter($request->bio_details ?? $event->bio_details ?? []);
    $data['agenda_items']      = array_filter($request->agenda_items ?? $event->agenda_items ?? []);

    // =============================
    // Update event
    // =============================
    $data['slug'] = Str::slug($request->title);
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
