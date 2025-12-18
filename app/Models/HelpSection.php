<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HelpSection extends Model
{
    protected $table = 'help_sections';
    protected $fillable = [
        'question',
        'answer'
    ];
}
