<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = "events";

    protected $fillable = [
        'slug',
        'title',
        'category',
        'description',
        'event_date',
        'event_time',
        'event_type',
        'link',
        'image',

        // Overview
        'title_overview',
        'description_overview',
        'img_details',
        'content_card_1',
        'content_card_2',
        'content_card_3',
        'content_card_4',
        'desc_overview',

        // Speakers
        'title_details',
        'name_details',
        'position_details',
        'bio_details',
        'profile_image',

        // Agenda
        'title_agenda',
        'agenda_items',

        // Breakout
        'breakout_items',
        'title_breakout',

        // Sponsors
        'title_sponsor',
        'sponsor_logos',

        // Location
        'title_location',
        'location_link',

        // Images
        'img_limit_3'
    ];

    protected $casts = [
        'event_date' => 'date',
        'name_details' => 'array',
        'position_details' => 'array',
        'bio_details' => 'array',
        'profile_image' => 'array',
        'agenda_items' => 'array',
        'breakout_items' => 'array',
        'img_limit_3' => 'array',
        'sponsor_logos' => 'array',
    ];
}
















// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Events extends Model
// {
//     use HasFactory;
//     protected $table = "events";
//     protected $fillable = [
      
//         'title',
//         'category',
//         'description',
//         'event_date',
//         'event_time',
//         'event_type',
//         'link',
//         'image',
//     ];
//     protected $casts = [
//         'event_date' => 'date',
//     ];
// }