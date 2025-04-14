<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Request.php
class Request extends Model{
    public function reviewer()
    {
      return $this->belongsTo(User::class, 'reviewer_id');
    }
    protected $fillable = ['specialization', 'submission_date', 'fees', 'status'];

    public function researches() {
        return $this->hasMany(Research::class);
    }


    protected $fillabless = ['university_name', 'request_number', 'status', 'reviewer_id'];
    public function reviewers() {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

    public function request()
{
    return $this->belongsTo(Request::class);
}

public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    

}

