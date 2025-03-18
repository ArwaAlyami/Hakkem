<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndReviewer extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',
        'pass',
        'phone',
        'IBAN',
        'academic_quali',
        'bachelors',
        'masters',
        'phd',
        'specialization',
        'response_speed',
        'accuracy',
        'feedback_quality',
        'job',
        'email',
        'asso_ed_id',
        'agent_name',
    ];
}
