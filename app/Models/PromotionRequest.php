<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionRequest extends Model
{
    protected $fillable = [
        'researches_no',
        'state',
        'deadline',
        'start_date',
        'end_date',
        'price',
        'fm_id',
    ];
}
