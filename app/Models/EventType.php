<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;

    protected $table = 'event_types';
    protected $fillable = [
        'title_event_1',
        'title_event_2',
        'name',
        'title',
        'type',
        'description',
        'image',
    ];
}
