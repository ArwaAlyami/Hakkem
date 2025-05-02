<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{

    public function showProfile()
    {
        $user = Auth::user();
        return view('editor_in_chief.MyProfile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name'  => 'required|string|max:255',
            'journal'    => 'nullable|string|max:255',
            'email'      => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($request->only('first_name', 'last_name', 'journal', 'email'));

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}









