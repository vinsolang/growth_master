<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChairContact extends Model
{
    use HasFactory;
    protected $table = 'chair_contacts';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'member_status',
        'executive_experience',
        'staff',
        'link',
        'cv',
        'comment',
    ];
}
