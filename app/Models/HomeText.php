<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeText extends Model
{
    protected $table = 'home_texts';
    protected $fillable = ['title', 'description'];
}
