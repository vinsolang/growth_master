<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadGroup extends Model
{
    protected $table = 'lead_group';
    protected $fillable = [
        'title_b_1',
        'desc_b_1',
        'img_b_1',

        'title_b_2',
        'desc_b_2',
        'img_b_2',

        'title_1',
        'desc_1',

        'title_cd_1',
        'title_cd_2',
        'title_cd_3',
        'title_cd_4',
        'title_cd_5',
        'title_cd_6',
        'title_cd_7',
        'd_cd_1',
        'd_cd_2',
        'd_cd_3',
        'd_cd_4',
        'd_cd_5',
        'd_cd_6',
        'd_cd_7',

        'title_2',
        'desc_2',

        't_t_1',
        't_t_2',
        't_t_3',
        't_t_4',
        't_d_1',
        't_d_2',
        't_d_3',
        't_d_4',

        'title_3',
        'desc_3',

        't_c_1',
        't_c_2',
        't_c_3',
        't_c_4',
        't_c_5',
        'd_c_1',
        'd_c_2',
        'd_c_3',
        'd_c_4',
        'd_c_5',

        'title_4',
        'desc_4',

        't_bg_1',
        't_bg_2',
        't_bg_3',
        't_bg_4',
        'd_bg_1',
        'd_bg_2',
        'd_bg_3',
        'd_bg_4',

        'title_5',
        'desc_5',

        'name',
        'position',
        'desc_him',
        'profile_him',
        'vdo',
        'title_v',
        'desc_v'

    ];
}
