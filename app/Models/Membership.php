<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = 'memberships'; 
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'postal_code',
        'company',
        'role',
        'revenue',
        'name_refer',
        'email_refer'
    ];
}
