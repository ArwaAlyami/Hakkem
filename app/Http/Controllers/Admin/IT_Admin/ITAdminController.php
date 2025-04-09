<?php
namespace App\Http\Controllers\Admin\IT_Admin;
use App\Http\Controllers\Controller;
use App\Models\FacultyMember;
use Illuminate\Http\Request;
        
        class ITAdminController extends Controller
        {
        
            public function index(Request $request)
            {
                $faculty_members = FacultyMember::paginate(5);
                return view('University_Pages.IT_Admin.MyProfile',compact('faculty_members'));
        
            }
        
            public function ManageUsers()
            {
                return view('University_Pages.IT_Admin.ManageUsers');
            }

            public function create()
            {
                return view('University_Pages.IT_Admin.CreateUsr');
            }
        
        
            public function store(Request $request)
            {
                $faculty_members = FacultyMember::create($request->only('f_name','l_name','email','department','password','rank'));
                return redirect()->route('ITAdminAccount.manage-users.index');
            }
        
            public function show(string $id)
            {
                
            }
        
        
            public function edit()
            {
                return view ('University_Pages.IT_Admin.Permission');
            }
        
        
            public function update(Request $request, string $id)
            {
                
            }
        
        
            public function delete($id)
            {
                $faculty_members = FacultyMember::where('id',$id)->first();
            
                $faculty_members->delete();
                return redirect()->route('admin.client.index');
            
                
            }
            public function SignOut(string $id)
            {
                // Auth::logout();
                // return redirect()->route('Get_Started');
            }
        }