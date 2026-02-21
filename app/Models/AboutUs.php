<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
   protected $table = 'about_us';
   protected $fillable = [
     'title',
           'desc',

           'title_v',
           'desc_v',

           'title_m',
           'desc_m',

           'title_c',
           'sub_t_1',
           'sub_t_2',
           'sub_t_3',
           'sub_t_4',
           'sub_t_5',
           'text_1',
           'text_2',
           'text_3',
           'text_4',
           'text_5',

           'title_1',
           'desc_2',
   ];

}
