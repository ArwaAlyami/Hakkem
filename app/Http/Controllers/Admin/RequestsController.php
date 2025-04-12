<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Research;


class RequestsController extends Controller
{

    // ************* Promotion Request **************//
    public function promotionCreate()
    {
        return view('Main_Pages.Requests.PromotionRequest.RequestSteps');
    }
    public function promotionStore(Request $request){
        $research = Research::create($request->only('title','abstract','keywords','field','DOI'));

        if($request->hasFile('file')){
            $research->addMultipleMediaFromRequest(['file'])->each(function($fileAdder){
                $fileAdder->toMediaCollection('research');
            });
        }
        return redirect()->route('Account.my-researches.index');
    }

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

