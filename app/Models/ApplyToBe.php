<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplyToBe extends Model
{
    protected $table = 'apply_to_be';

    protected $fillable = [
        'title',
        'description',
        'desc_list',
    ];
}
