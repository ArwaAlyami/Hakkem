<?php

// app/Http/Controllers/PromotionAdmin/ReviewerController.php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use App\Models\Reviewer;

class ReviewerListController extends Controller
{
    public function index()
    {
        // استرجاع كل المراجعين من قاعدة البيانات
        $reviewers = Reviewer::all();
        return view('PromotionAdmin.ListOfReviewers', compact('reviewers'));
    }

    public function listSpecializations()
    {
        $specializations = Reviewer::select('specialization')->distinct()->get();
        return view('PromotionAdmin.ReviewersList', compact('specializations'));
    }

    // عرض المراجعين داخل تخصص معين
    public function showBySpecialization($specialization)
    {
        $reviewers = Reviewer::where('specialization', $specialization)->get();
        return view('PromotionAdmin.ListOfReviewers', compact('reviewers', 'specialization'));
    }
}







