<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NamesOfReviewer extends Model
{
    protected $fillable = [
        'list_id',
        'name_of_reviewer',
        'university',
        'department',
        'country',
        'city',
        'email',
        'phone',

    ];
}
