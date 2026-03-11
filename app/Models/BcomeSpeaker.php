<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BcomeSpeaker extends Model
{
     protected $table = 'become-a-speaker';
    protected $fillable = [
        'title_1',
        'desc_1',
        'title_2',
        'text_json',
        'title_3',
        'card_json',
        'desc_3'
    ];

    protected $casts = [
        'text_json' => 'array',
        'card_json' => 'array'
    ];
}
