<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Feedback extends Model implements HasMedia 
{
    use InteractsWithMedia;
    protected $fillable = [
        'degree',
        'pro_req_id',
        'rev_req_id',
        'research_id',
        'fm_id',
        'res_id',
        'rev_id',
        
    ];
}
