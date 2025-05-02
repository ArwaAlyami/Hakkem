<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('Main_Pages.Main.Home');
    }
    
    public function chat(Request $request)
    {
        return view('Independent.Chat');
    }

    public function Journals(Request $request)
    {
        return view('Journals.Journals');
    }


   
}
