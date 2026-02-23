<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table = "events";
    protected $fillable = [
        // 'title_of_event',
        // 'desc_of_event',
        'title',
        'category',
        'description',
        'event_date',
        'event_time',
        'event_type',
        'link',
        'image',
    ];
}