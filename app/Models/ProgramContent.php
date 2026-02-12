<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramContent extends Model
{
    protected $table = 'program_contents';
    protected $fillable = [
           'title',
            'description',

           'title_1',

            'image',

           'title_2',
            'description_2',

           'title_3',
            'description_3',

            'table',
    ];
}
