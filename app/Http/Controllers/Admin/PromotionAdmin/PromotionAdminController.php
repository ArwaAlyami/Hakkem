<?php

namespace App\Http\Controllers\Admin\PromotionAdmin;

use App\Http\Controllers\Controller;
use App\Models\FacultyMember;
use App\Models\PromotionRequest;
use App\Models\Research;
use Illuminate\Http\Request;

class PromotionAdminController extends Controller
{

    public function Profile()
    {
        $user = auth()->user();
        return view('University_Pages.Promotion_Admin.MyProfile',compact('user'));
    }

    // public function ProfileEdit()
    // {
    //     return view('University_Pages.Promotion_Admin.');
    // }

    public function PromotionRequests()
    {
        $promotionRequests = PromotionRequest::with('research')->get();
        return view('University_Pages.Promotion_Admin.PromotionRequests',compact('promotionRequests'));
    }

    public function AcceptOrReject($id)
    {
        $research = Research::whereId($id)->first();
        $users = FacultyMember::whereHas('roles',function($q){
            $q->where('name','Reviewer');
        })->get();
        return view('University_Pages.Promotion_Admin.AcceptOrRejectRequest',compact('research','users'));

    }

    public function AcceptedRequest()
    {
        return view('University_Pages.Promotion_Admin.AcceptedRequest');
    }




    public function ReviewersLists()
    {
        return view('University_Pages.Promotion_Admin.ReviewersLists');
    }

    public function ReviewersListContent()
    {
        return view('University_Pages.Promotion_Admin.ReviewersListContent');
    }
}
