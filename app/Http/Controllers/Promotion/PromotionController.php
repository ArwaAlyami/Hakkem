<?php

namespace App\Http\Controllers\Promotion;

use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use App\Models\PromotionRequest;
// app/Http/Controllers/Reviewer/RequestController.php



class PromotionController extends Controller{

    public function show($id){

        $request = Request::with('researches.feedbacks.reviewer')->findOrFail($id);
        return view('UniversityPages.PromotionAdmin.Request_Details', compact('request'));
    }


    public function showRequestDetails($id){

    $request = PromotionRequest::with('researches')->findOrFail($id);

    return view('PromotionAdmin.Accept-Reject-Request', [
        'request' => $request,
        'researches' => $request->researches
    ]);
    }


    public function accept($id){

    $request = PromotionRequest::findOrFail($id);
    $request->status = 'accepted';
    $request->save();

    return redirect()->back()->with('success', 'Request accepted successfully.');
    }
    

    public function reject($id){

    $request = PromotionRequest::findOrFail($id);
    $request->status = 'rejected';
    $request->save();

    return redirect()->back()->with('success', 'Request rejected successfully.');
    }


    public function index(){

    $requests = PromotionRequest::with('facultyMember')->get();

    return view('University_Pages.Promotion_Admin.PromotionRequests', compact('requests'));
    }   


    public function filterByStatus($status){

    $requests = PromotionRequest::where('status', $status)->with('facultyMember')->get();
    return view('University_Pages.Promotion_Admin.PromotionRequests', compact('requests'));
    }


    public function showe($id){
        
    $request = PromotionRequest::with('facultyMember')->findOrFail($id);
    return view('PromotionAdmin.ViewRequest', compact('request'));
    }

}
