<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CEOClimb extends Model
{
    protected $table = 'c_e_o_climbs';
    protected $fillable = [
          'description',
            'title',

            'title_card_1',
            'desc_card_1',
            'img_card_1',

            'title_card_2',
            'desc_card_2',
            'img_card_2',

            
            'title_card_3',
            'desc_card_3',
            'img_card_3',
    ];
}
