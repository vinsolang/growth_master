<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyJoinGrowthMaster extends Model
{
    protected $table = 'why_join_growth_masters';

    protected $fillable = [
        'content',
        'title',
        'description',
        'title_1',
        'description_1',
        'table',
        'text',
        'title_2',
        'description_3',
        'title_card_1',
        'title_card_2',
        'title_card_3',
        'desc_card_1',
        'desc_card_2',
        'desc_card_3',
    ];
}
