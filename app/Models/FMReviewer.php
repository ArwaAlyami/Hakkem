<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FMReviewer extends Model
{
    protected $fillable = [
        'fm_rev_id',
        'response_speed',
        'feedback_quality',
        'accuracy',
        'department',
        'prom_ad_id',
    ];
}
