<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Research;
use App\Models\Feedback; 

class FeedbackController extends Controller
{
    public function getFeedbacks($researchId)
    {
        $feedbacks = Feedback::with('reviewer')
            ->where('research_id', $researchId)
            ->get();

        return response()->json($feedbacks);
    }
}
