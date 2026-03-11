<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralProgram extends Model
{
    protected $table = 'referral_program';

    protected $fillable = [
        'desc_1',
        'img_json',
        'title_json'
    ];

    protected $casts = [
        'img_json' => 'array',
        'title_json' => 'array'
    ];
}