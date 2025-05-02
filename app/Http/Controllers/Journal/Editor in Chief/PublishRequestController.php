<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Http\Request as HttpRequest;

class PublishRequestController extends Controller
{
    public function index()
    {

        $allRequests = Request::all();
        $publishedRequests = Request::where('status', 'published')->get();
        $underReviewRequests = Request::where('status', 'under_review')->get();
        $rejectedRequests = Request::where('status', 'rejected')->get();

        return view('editor_in_chief.publish_requests', compact('allRequests', 'publishedRequests', 'underReviewRequests', 'rejectedRequests'));


    }

        public function show($id)
    {
        $request = Request::findOrFail($id);
        return view('requestDetails', compact('request'));
    }

    public function updateStatus($id, $status)
{
    $request = Request::findOrFail($id);
    $request->status = $status;
    $request->save();

    return redirect()->route('publish-requests');
}
}












