<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Research extends Model implements HasMedia 

{
    protected $table='researches';
    use InteractsWithMedia;
    protected $fillable = [
        'title',
        'abstract',
        'DOI',
        'field',
        'keywords',
        'specialization',
        'pro_req_id',
        'fm_id',
        'res_id',
        'rev_id',
    ];
}