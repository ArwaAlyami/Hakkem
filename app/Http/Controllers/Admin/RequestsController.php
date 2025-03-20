<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestsController extends Controller
{

    // ************* Promotion Request **************//
    public function Promotion_Request(){
        return view("Main_Pages.Requests.PromotionRequest.RequestSteps");
    }

    //  // ************* Publish Request **************//
    // public function Publish_Request(){
    //     return view("Main_Pages.Requests.");
    // }

    // ************* Review Request **************//

    public function Review_Options(){
        return view("Main_Pages.Requests.Review_Request.ReviewRequestOptions");
    }

    public function Ind_Reviewer_Options(){
        return view("Main_Pages.Requests.Review_Request.ThroughIndRevsOptions");
    } 

    public function AI_Review(){
        return view("Main_Pages.Requests.Review_Request.AI-Review-Request");    
    }

    public function Through_Offers_Review(){
        return view("Main_Pages.Requests.Review_Request.Offers-Review-Request");    
    }

    public function Through_Ind_Reviewer(){
        return view("Main_Pages.Requests.Review_Request.ThroughIndReviewer");    
    }
}

