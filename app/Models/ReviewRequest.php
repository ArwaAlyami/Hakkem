<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewRequest  extends Model
{
    protected $fillable = [
        'state',
        'start_date',
        'end_date',
        'res_id',
        'rev_id',
        'research_id',
        'fm_id',
    ];
}
