<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use App\Models\Reviewer;
use Illuminate\Http\Request;

class ReviewerListController extends Controller
{
    public function index()
    {

        $reviewers = Reviewer::where('type', 'journal')->get();

        return view('Journals.ListOfReviewers', compact('reviewers'));
    }
    public function listJournalSpecializations()
{
    $specializations = Reviewer::select('specialization')->distinct()->get();
    return view('Journals.AssociatedEd.ReviewersList', compact('specializations'));
}

}
