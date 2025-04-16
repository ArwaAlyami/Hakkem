<?php

namespace App\Http\Controllers\Admin\FM_Researcher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{
    
    public function index()
    {
        $user = auth()->user();
        return view('University_Pages.FM_Researcher.My_Profile',compact('user'));
    }

}
