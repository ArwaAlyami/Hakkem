<?php

namespace App\Http\Controllers\Admin\PromotionAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionAdminController extends Controller
{
 
    public function Profile()
    {
        return view('University_Pages.Promotion_Admin.MyProfile');
    }

    public function ProfileEdit()
    {
        return view('University_Pages.Promotion_Admin.');
    }

    public function PromotionRequests()
    {
        return view('University_Pages.Promotion_Admin.PromotionRequests');
    }

    public function AcceptOrReject()
    {
        return view('University_Pages.Promotion_Admin.AcceptOrRejectRequest');

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
