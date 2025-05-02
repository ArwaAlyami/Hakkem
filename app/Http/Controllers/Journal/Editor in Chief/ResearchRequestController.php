<?php

namespace App\Http\Controllers\Journal;
use App\Models\ResearchRequest;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Research;
use App\Models\Reviewer;
use Illuminate\Http\Request;

class  ResearchRequestController extends Controller
{

    public function show($id)
    {
        $request = ResearchRequest::findOrFail($id);
        return view('request.details', compact('request'));
    }

    public function accept($id)
    {
        $request = ResearchRequest::findOrFail($id);
        $request->status = 'accepted';
        $request->save();
        return back()->with('success', 'Request accepted successfully.');
    }

    public function reject($id)
    {
        $request = ResearchRequest::findOrFail($id);
        $request->status = 'rejected';
        $request->save();
        return back()->with('error', 'Request rejected successfully.');
    }



        protected $fillable = ['title', 'field', 'specialization', 'file_path', 'keywords', 'abstract'];

        public function feedbacks()
        {
            return $this->hasMany(Feedback::class, 'research_id');
        }



    }








