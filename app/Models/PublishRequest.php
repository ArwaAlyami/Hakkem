<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublishRequest  extends Model
{
    protected $fillable = [
        'state',
        'start_date',
        'end_date',
        'res_id',
        'jour_id',
        'prom_ad_id',
        'research_id',
        'fm_res_id',
    ];
}
