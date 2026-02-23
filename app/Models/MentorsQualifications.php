<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MentorsQualifications extends Model
{
    protected $table = 'mentors_qualifications';
    protected $fillable = [
        'title',
        'description',
        'bg_img',
        'title_bg',
        'desc_1',
        'desc_2',
        'desc_3',
        'desc_4',
        'desc_5',
        'desc_6',
    ];
}
