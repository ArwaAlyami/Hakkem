<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('SignIn.Home');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate(rules: [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(credentials: $credentials)) {
            $request->session()->regenerate();
            return 'yes';
        }

        return 'no';
    }

    public function me(Request $request)
    {
        return auth()->user();
    }
}
