<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainPagesController extends Controller
{
    public function GetStarted(){
        return view("Main_Pages.Main.GetStarted");
    }

    public function AboutUs(){
        return view("Main_Pages.Main.AboutUs");
    }

    public function SignUp(){
        return view("Main_Pages.SignIn_SignUp.SignUp");
    }
    
    public function OrgType(){
        return view('Main_Pages.SignIn_SignUp.OrganizationType') ;
     }
    public function UserType(){
        return view('Main_Pages.SignIn_SignUp.UserType') ;
     }

     public function JournalUserType(){
        return view('Main_Pages.SignIn_SignUp.JournalUserType') ;
     }

     public function Home(){
        return view('Main_Pages.Main.Home') ;
     }
}
