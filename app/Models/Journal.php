<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Journal extends Model implements HasMedia 
{
    use InteractsWithMedia;
    protected $fillable = [
        'name',
        'scope',
        'email',
        'logo',
        'publisher_name',
        'issn',
    ];
}
