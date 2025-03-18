<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
        'name',
        'scope',
        'email',
        'logo',
        'publisher_name',
        'issn',
    ];
}
