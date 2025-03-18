<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EditorChief extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',
        'pass',
        'phone',
        'email',
        'jour_id',

    ];
}
