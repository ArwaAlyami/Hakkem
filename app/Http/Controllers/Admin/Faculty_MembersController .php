<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use Illuminate\Http\Request;

class Faculty_MembersController extends Controller
{
    public function index(Request $request): View
    {
        return view( view: 'SignIn.Home');
    }

    /**
     * Handle an authentication attempt.
     */

}
