<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramJobText extends Model
{
    protected $table = 'program_text';
    protected $fillable = [
        'title_page',
        'desc_page',
        'title_program',
        'content_program'
    ];
}
