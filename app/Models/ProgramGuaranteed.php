<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramGuaranteed extends Model
{
    protected $table = 'program_guaranteed';
    protected $fillable = [
        'title',
        'description',
        'img_card',
        'img_details',
        'desc_details'
    ];
}
