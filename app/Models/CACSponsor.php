<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CACSponsor extends Model
{
    protected $table = 'become_a_sponsor';

    protected $fillable = [
        'desc_1',
        'title_1',
        'img',
        'd_1',
        'd_2',
        'd_3',
        'd_4',
        'title_form',
        'title_logo',
        'logo_img'
    ];

    protected $casts = [
        'logo_img' => 'array'
    ];
}