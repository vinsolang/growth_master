<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BAccounting extends Model
{
    protected $table = 'b_accounting';
    protected $fillable = [
        'description',
        'title',
        'title_card',
        'desc_card',
        'img_card',
    ];

    protected $casts = [
        'title_card' => 'array',
        'desc_card' => 'array',
        'img_card' => 'array',
    ];
}
