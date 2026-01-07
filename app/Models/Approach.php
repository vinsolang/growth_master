<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approach extends Model
{
    use HasFactory;
    protected $table = 'approaches';
    protected $fillable = [
        'title',
        'description',
        'image',
        'button_text',
        // 'button_link',
        // 'order',
        'has_background',
    ];
}
