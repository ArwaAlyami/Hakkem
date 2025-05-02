<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchRequest;

class PromotionRequestController extends Controller
{
    public function showDetails()
    {

        $researchRequests = ResearchRequest::all(); 

        return view('Promotion.RequestDetails', compact('researchRequests'));
    }
}


