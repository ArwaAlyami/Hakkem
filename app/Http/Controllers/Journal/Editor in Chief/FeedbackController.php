<?php

namespace App\Http\Controllers\Journal;
use App\Models\ResearchRequest;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Research;
use App\Models\Reviewer;
use Illuminate\Http\Request;

class  FeedbackController extends Controller
{

    protected $fillable = ['research_id', 'reviewer_name', 'viewed', 'content'];

    public function research()
    {
        return $this->belongsTo(ResearchRequest::class, 'research_id');
    }



    }








