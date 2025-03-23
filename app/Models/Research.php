<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\IntractWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Research extends Model 
// implements HasMedia 
{
    protected $fillable = [
        'title',
        'abstract',
        'DOI',
        'full_res',
        'keywords',
        'specialization',
        'pro_req_id',
        'fm_res_id',
        'prom_ad_id',
        'fm_rev_id',
        'editor_id',
        'asso_ed_id',
        'res_id',
        'rev_id',
    ];
}
