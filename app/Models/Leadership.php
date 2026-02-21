<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    protected $table = 'leaderships';
    protected $fillable = [
           'description',

           'title_card_1',
           'desc_card_1',
           'img_card_1',

           'title_card_2',
           'desc_card_2',
           'img_card_2',


           'title_1',
           'description_1',
    ];
}
