<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeerGroupContent extends Model
{
        protected $table = 'peer_group_contents';

        protected $fillable = [
            'title',    
            'description',
            'description_1',

            'table',

           'title_2',    
            'description_2',

            'img_card1',    
            'desc_card1',
            'desc_card2',    
            'img_card2',

           'title_t1',    
           'title_t2',    
           'title_t3',    
           'title_t4',    
           'title_t5',    
            'desc_t1',
            'desc_t2',
            'desc_t3',
            'desc_t4',
            'desc_t5',

           'title_3',    
            'description_3',

           'title_c1',  
           'title_c2',  
           'title_c3',  
           'title_c4',  
           'title_c5',  
           'title_c6',  
            'desc_c1',
            'desc_c2',
            'desc_c3',
            'desc_c4',
            'desc_c5',
            'desc_c6',

           'title_4',  
            'description_4',

           'title_g1',  
           'title_g2',  
           'title_g3',  
           'title_g4',  
           'title_g5',  
           'title_g6',  
            'desc_g1',
            'desc_g2',
            'desc_g3',
            'desc_g4',
            'desc_g5',
            'desc_g6',
        ];
        
}
