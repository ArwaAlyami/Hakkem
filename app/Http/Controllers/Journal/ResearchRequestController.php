<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Research;
use App\Models\Reviewer;
use Illuminate\Http\Request;

class  ResearchRequestController extends Controller
{
    public function showRequestDetails($id)
    {
        $research = Research::findOrFail($id);
        $feedbacks = Feedback::where('research_id', $id)->get();

        return view('Journals.AssociatedEditor.AcceptedRequest', compact('research', 'feedbacks'));


    }


}
