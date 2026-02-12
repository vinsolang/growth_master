<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApproachContent extends Model
{
       protected $table = 'approach_contents'; 

       protected $fillable = [
        'title',
        'content',

        'title_on_card',

        'title_card_1',
        'title_card_2',
        'title_card_3',
        'desc_card_1',
        'desc_card_2',
        'desc_card_3',

        'title_1',
        'content_1',

        'title_2',
        'content_2',
       ];
}
