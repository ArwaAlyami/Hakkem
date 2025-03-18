<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreliminaryAssessment extends Model
{
    protected $fillable = [
        'full_assessment',
        'abstract',
        'title',
        'research_id',
        'agent_name',
    ];
}
