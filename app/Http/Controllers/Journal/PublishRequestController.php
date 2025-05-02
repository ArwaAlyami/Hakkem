<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use App\Models\PublishRequest;
use Illuminate\Http\Request;

class PublishRequestController extends Controller
{
    public function index()
    {
        $publishRequests = PublishRequest::all();
        return view('Journals.PublishRequests', compact('publishRequests'));
    }
}

