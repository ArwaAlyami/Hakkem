<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use App\Models\FacultyMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function MainSignInForm(){
        if(Auth::check()){
            return redirect()->route('Main_Pages.Home');
        }
        return view("Main_Pages.SignIn_SignUp.SignIn");
     }


     public function MainSignUpForm(){
        return view('Main_Pages.SignIn_SignUp.SignUp') ;

     }
     

     public function authenticate(Request $request)
     {
     $credentials = $request->validate(rules: [
             'email' => ['required', 'email'],
             'password' => ['required'],
         ]);

         if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('Main_Pages.Home');
         }

         return redirect()->back();
     }

     public function register(Request $request){
        FacultyMember::create($request->all());
        return  redirect()->route('admin.SignIn-get');
     }
}
