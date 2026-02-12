<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeText extends Model
{
    use HasFactory;
    protected $table = 'home_texts';
    protected $fillable = ['title', 'description'];
}
