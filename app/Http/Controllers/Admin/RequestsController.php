<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PromotionRequest;
use Illuminate\Http\Request;
use App\Models\Research;


class RequestsController extends Controller
{

    public function __construct(){
        $this->middleware('permission:send_request');    
    }

    // ************* Promotion Request **************//
    public function MakePromotionRequest()
    {
        $researchs =Research::with('media')->get();
        return view('Main_Pages.Requests_Updated.PromotionRequest.Promotion-Request',compact('researchs'));
    }
    public function promotionStore(Request $request)
    {
        foreach($request->research_ids as $research_id){
            PromotionRequest::create([
                'research_id'=>$research_id,
                'state'=>'pending'
            ]);
        }
        return redirect()->route('Main_Pages.Home');
    }

    // ************* Review Request **************//

    public function Review_Options(){
        return view("Main_Pages.Requests_Updated.ReviewRequest.ReviewRequestOptions");
    }

    public function Ind_Reviewer_Options(){
        return view("Main_Pages.Requests_Updated.ReviewRequest.ThroughIndRevsOptions");
    } 

    public function AI_Review(){
        return view("Main_Pages.Requests_Updated.ReviewRequest.AI-Review-Request");    
    }

    public function Through_Offers_Review(){
        return view("Main_Pages.Requests_Updated.ReviewRequest.Offers-Review-Request");    
    }

    public function Through_Ind_Reviewer(){
        return view("Main_Pages.Requests_Updated.ReviewRequest.Rev-Review-Request");    
    }




    // ************* Publish Request **************//

    public function MakePublishRequest()
    {
        return view('Main_Pages.Requests_Updated.PublishRequests.Publish-Request');
    }

    public function publishStore()
    {

    }

}

