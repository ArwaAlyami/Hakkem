<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'degree',
        'full_feed',
        'pro_req_id',
        'rev_req_id',
        'pub_req_id',
        'research_id',
        'editor_id',
        'asso_ed_id',
        'fm_rev_id',
        'fm_res_id',
        'prom_ad_id',
        'res_id',
        'rev_id',
        
    ];
}
