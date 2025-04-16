<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



    class ReviewerProfileController extends Controller
    {
        public function show()
        {
            $reviewer = Auth::user();
            return view('University_Pages.FM_Reviewer_Researcher.My_Profile', compact('reviewer'));
        }

//         public function update(Request $request)
//         {
//             $request->validate([
//                 'f_name' => 'required|string',
//                 'l_name' => 'required|string',
//                 'email' => 'required|email',

//             ]);

//             $user = Auth::user();

//             $user->f_name = $request->first_name;
//             $user->l_name = $request->last_name;
//             $user->email = $request->email;

//             $user->save();

//             return back()->with('success', 'Profile updated successfully!');
//         }

//         public function showProfile()
// {
//     $reviewer = auth()->user();
//     return view('UniversityPages.FM_Reviewer.My_Profile', compact('reviewer'));
// }
    
}


