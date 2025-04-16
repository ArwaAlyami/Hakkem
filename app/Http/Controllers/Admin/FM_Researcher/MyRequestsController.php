<?php

namespace App\Http\Controllers\Admin\FM_Researcher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyRequestsController extends Controller
{
  
    public function __construct(){

        $this->middleware('permission:request_list_view')->only('index','show');
    }

    public function index()
    {
        return view ('University_Pages.FM_Researcher.My_Requests');
    }

    public function show()
    {
        return view('University_Pages.FM_Researcher.Request_Details');
    }

}
