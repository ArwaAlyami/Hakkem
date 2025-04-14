<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reviewer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Feedback extends Model{
    protected $fillable = [
        'degree',
        'pro_req_id',
        'rev_req_id',
        'research_id',
        'fm_id',
        'res_id',
        'rev_id',

    ];
  
}





