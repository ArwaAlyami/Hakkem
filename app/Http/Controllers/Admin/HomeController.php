<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('Main_Pages.Main.Home');
    }

    /**
     * Handle an authentication attempt.
     */
   

    public function me(Request $request)
    {
        return auth()->user();
    }
}
