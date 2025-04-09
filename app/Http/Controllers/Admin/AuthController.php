<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function SignIn(){
        return view('Main_Pages.SignIn_SignUp.SignIn') ;
     }
}
