<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SystemadmenController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:Systemadmin');
    }

    public function updateRole(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'role' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {

            $user->syncRoles($request->role);

            return response()->json(['message' => 'Role updated successfully']);
        }

        return response()->json(['message' => 'User not found'], 404);
    }

    public function viewDashboard()
    {
        return response()->json(['message' => 'Welcome to the admin dashboard']);
    }

    public function addResearch(Request $request)
    {
        if (auth()->user()->can('research_add')) {

            return response()->json(['message' => 'Research added successfully']);
        }

        return response()->json(['message' => 'You do not have permission to add research'], 403);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);


        $user->assignRole('researcher');

        return response()->json(['message' => 'User registered successfully']);
    }
}
