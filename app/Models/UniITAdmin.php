<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniITAdmin extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'uni_id',
    ];
}
