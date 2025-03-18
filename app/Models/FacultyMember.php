<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyMember extends Model
{
    protected $fillable = [
        'pass',
        'f_name',
        'l_name',
        'phone',
        'IBAN',
        'bachelors',
        'masters',
        'phd',
        'Academic_quali',
        'email',
        'rank',
        'uni_id',
        'agent_name',

    ];
}
