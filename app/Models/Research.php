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
        'researcher_id'
    ];
    // app/Models/Research.php



    public function researcher()
    {
        return $this->belongsTo(User::class, 'researcher_id');
    }

    protected $fillables = ['request_id', 'title', 'field', 'keywords', 'abstract'];

    public function request() {
        return $this->belongsTo(Request::class);
    }


    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }



}


