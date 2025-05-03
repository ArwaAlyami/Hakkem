<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ITController extends Controller
{
    
    public function Profile()
    {
        return view('Journals.IT AdminJournal.profile');
    }
    public function ManageUsers()
    {
        return view('Journals.IT AdminJournal.ManageUsersJournal');
    }
    public function CreateUser()
    {
        return view('Journals.IT AdminJournal.CreateUsersJournal');
    }
    public function ManagePermissions()
    {
        return view('Journals.IT AdminJournal.permission2');
    }

}
