<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FMResearcher extends Model
{
    protected $fillable = [
        'fm_res_id',
        'department',
        'pro_req_id',
    ];
}
