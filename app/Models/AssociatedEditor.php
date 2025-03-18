<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssociatedEditor extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',
        'pass',
        'phone',
        'IBAN',
        'bachelors',
        'master',
        'phd',
        'email',
        'specialization',
        'agent_name',
        'editor_id',
        'jour_id',

    ];
}
