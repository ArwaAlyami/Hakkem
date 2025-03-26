<?php

namespace App\Models;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Model;

class Unversity extends Model implements HasMedia 
{
    use InteractsWithMedia;
    protected $fillable = [
        'name',
        'email',
        'Logo',
    ];
}
