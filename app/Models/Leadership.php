<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    protected $table = 'leaderships';
    protected $fillable = [
        'description',

        'title_card',
        'desc_card',
        'img_card',

        'title_1',
        'description_1',
    ];

    protected $casts = [
        'title_card' => 'array',
        'desc_card' => 'array',
        'img_card' => 'array',
    ];
}
