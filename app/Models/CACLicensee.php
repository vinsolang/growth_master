<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CACLicensee extends Model
{
    protected $table = 'cac-licensee';

    protected $fillable = [
        'title_1',
        'desc_1',
        'title_2',
        'img',
        't_1',
        'd_1',
        't_2',
        'd_2',
        't_3',
        'd_3',
        't_4',
        'd_4',
        'title_3',
        'desc_3',
        'desc_4',
        'desc_5',
        'title_meet',
        'desc_meet',
        'profile',
        'name',
        'position',
        'desc_him',
        'title_final',
        'desc_final'
    ];
}