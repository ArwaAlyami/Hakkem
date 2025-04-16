<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use App\Models\FacultyMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function MainSignInForm(Request $request){
        if(Auth::check()){
            return redirect()->route('Main_Pages.Home');
        }
       $type = $request->type??'';
        // it_admin
        // promotion_admin
        // researcher
        // reviewer
        return view("Main_Pages.SignIn_SignUp.SignIn",compact('type'));
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

            if($request->type == 'it_admin'){
                return redirect()->route('ITAdminAccount.My_Profile.Profile');
            }elseif($request->type == 'promotion_admin'){
                return redirect()->route('PromotionAccount.Profile');
            }elseif($request->type == 'researcher'){
                return redirect()->route('researcher-account.my-profile.index');
            }elseif($request->type == 'reviewer'){
                return redirect()->route('RevResAccount.Profile');
            }else{
                return redirect()->route('Main_Pages.Home');
            }
         }

         return redirect()->back();
     }

     public function register(Request $request){
        $faculty_member= FacultyMember::create($request->all());
        $faculty_member->assignRole('Researcher');

        return  redirect()->route('admin.SignIn-get');
     }
}
