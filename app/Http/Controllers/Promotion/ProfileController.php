<?php

namespace App\Http\Controllers\Promotion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PromotionRequest;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $promotionAdmin = auth()->user();
        return view('PromotionAdmin.MyProfile', compact('promotionAdmin'));
    }

    public function updateProfile(Request $request)
{
    $user = auth()->user();

    $request->validate([
        'f_name' => 'required|string|max:255',
        'l_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'phone' => 'nullable|string|max:20',

    ]);

    $user->update($request->only([
        'f_name', 'l_name', 'email', 'phone',
        'university', 'academic_rank', 'academic_qualification',
        'bachelor_specialization', 'master_specialization', 'doctorate_specialization'
    ]));

    return back()->with('success', 'Profile updated successfully!');
}

}




