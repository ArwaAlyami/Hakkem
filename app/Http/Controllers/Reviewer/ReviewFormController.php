<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use App\Models\ReviewForm;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class ReviewFormController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'research_id' => 'required|exists:researches,id',
        'criteria' => 'required|array',
        'notes' => 'nullable|string',
        'total_score' => 'nullable|integer|max:60',
    ]);

    $validated['reviewer_id'] = auth()->id();

    ReviewForm::create($validated);

    return redirect()->route('RevResAccount.RequestDetailsIfAccept')
                     ->with('success', 'Review form saved successfully.');
}
public function showRequestDetails($id)
{
    $request = Request::findOrFail($id);
    return view('UniversityPages.FM_Reviewer.FM_Res_Rev_Request_Details_Review_Publish', compact('request'));
}
public function showForm($request_id)
{
    $request = Request::findOrFail($request_id);
    return view('UniversityPages.FM_Reviewer.AI_And_Healthcare', compact('request'));
}

public function store(Request $request)
{

    $review = Review::create([
        'request_id' => $request->request_id,
        'reviewer_id' => auth()->id(),
        'notes' => $request->notes,
        'total_score' => $request->scoreBox,
    ]);


    foreach ($request->input('scores', []) as $score) {
        ReviewScore::create([
            'review_id' => $review->id,
            'category' => $score['category'],
            'label' => $score['label'],
            'checked' => true,
        ]);
    }

    return redirect()->route('RevResAccount.RequestDetailsIfAccept')->with('success', 'Review saved successfully!');
}


};



