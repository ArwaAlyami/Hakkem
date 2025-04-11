<?php

namespace App\Http\Controllers\Admin\FM_Reviewer_Researcher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RevResController extends Controller
{
 
    public function Profile()
    {
        return view('University_Pages.FM_Reviewer_Researcher.My_Profile');
    }

    public function ProfileEdit()
    {
        return view('University_Pages.FM_Reviewer_Researcher.My_Profile');

    }

    public function MyRequests()
    {
        return view('University_Pages.FM_Reviewer_Researcher.My_Requests');
    }


    public function MyResearches()
    {
        return view('University_Pages.FM_Reviewer_Researcher.My_Researches');

    }

    public function AddResearch()
    {
        return view('University_Pages.FM_Reviewer_Researcher.Add_Research');

    }

    public function AddResearchForm()
    {

    }

    
    public function ReceivedRequests()
    {
        return view('University_Pages.FM_Reviewer_Researcher.Received_Requests');

    }

    public function RequestDetailsAcceptOrReject()
    {
        return view('University_Pages.FM_Reviewer_Researcher.RequestDetailsAcceptOrReject');

    }

    public function RequestDetailsIfAccept()
    {
        return view('University_Pages.FM_Reviewer_Researcher.RequestDetailsIfAccept');

    }

    public function ReviewForm()
    {
        return view('University_Pages.FM_Reviewer_Researcher.ReviewForm');

    }

    public function SubmitFeedback()
    {
        return view('University_Pages.FM_Reviewer_Researcher.SubmitFeedback');

    }


    public function ReviewRequestDetails()
    {
        return view('University_Pages.FM_Reviewer_Researcher.ReviewRequestDetails');

    }

    public function PromotionRequestDetails()
    {
        return view('University_Pages.FM_Reviewer_Researcher.PromotionRequestDetails');

    }

 
    public function ReviewerProfile()
    {
        return view('University_Pages.FM_Reviewer_Researcher.ReviewerProfile');

    }


}
