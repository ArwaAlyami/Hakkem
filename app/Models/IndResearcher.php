<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndResearcher extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',
        'pass',
        'phone',
        'IBAN',
        'academic_quali',
        'bachelors',
        'master',
        'phd',
        'email',
        'specialization',
        'affiliation',
        'job',
        'agent_name',
    ];
}
