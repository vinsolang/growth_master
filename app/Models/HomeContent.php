<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $table = 'home_contents';
    protected $fillable = [
        'title',
        'description',

        'title_card_1',
        'title_card_2',
        'title_card_3',
        'title_card_4',
        'title_card_5',
        'title_card_6',
        'desc_card_1',
        'desc_card_2',
        'desc_card_3',
        'desc_card_4',
        'desc_card_5',
        'desc_card_6',

        'title_1',
        'description_1',
        'image',

           
        'sub_title_event',

        'title_event_1',
        'title_event_2',
        'title_event_3',
        'desc_card_event_1',
        'desc_card_event_2',
        'desc_card_event_3',
        'img_card_event_1',
        'img_card_event_2',
        'img_card_event_3',

        'title_below',
        'desc_bolow',
    ];
}
