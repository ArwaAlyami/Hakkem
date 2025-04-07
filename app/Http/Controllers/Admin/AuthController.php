<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function IndividualSignUp(){
        return view("Main_Pages.SignIn_SignUp.IndividualSignUpForm");
    }

    public function JournalSignUpForm(){
       return view('Main_Pages.SignIn_SignUp.JournalSignUpForm') ;
    }
    public function MainSignInForm(){
        return view('Main_Pages.SignIn_SignUp.MainSignInForm') ;
     }
     public function UserType(){
        return view('Main_Pages.SignIn_SignUp.MainSignUpForm') ;
     }
     public function UniversitySignUpForm(){
        return view('Main_Pages.SignIn_SignUp.UniversitySignUpForm') ;
     }
}
