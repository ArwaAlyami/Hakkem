<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Request.php
class ReviewForm extends Model{


    protected $fillable = ['research_id', 'reviewer_id', 'criteria', 'notes', 'total_score'];

    protected $casts = [
        'criteria' => 'array', 
    ];

    public function research()
    {
        return $this->belongsTo(Research::class);
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }
}








