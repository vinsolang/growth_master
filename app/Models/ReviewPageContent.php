<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewPageContent extends Model
{
    protected $table = 'review_page_contents';
    protected $fillable = [
            'title',
            'description',

            'title_card_1',
            'desc_card_1',
            'name_card_1',
            'positioin_card_1',

            'title_card_2',
            'desc_card_2',
            'name_card_2',
            'positioin_card_2',
            'profile_card_2',

            'title_card_3',
            'desc_card_3',
            'name_card_3',
            'positioin_card_3',
            'profile_card_3',

            'title_card_4',
            'desc_card_4',
            'name_card_4',
            'positioin_card_4',
    ];
}
