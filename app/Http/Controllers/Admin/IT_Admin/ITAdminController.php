<?php
namespace App\Http\Controllers\Admin\IT_Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddMembersRequest;
use App\Models\FacultyMember;
use Illuminate\Http\Request;
        
        class ITAdminController extends Controller
        {
        
            public function index(Request $request)
            {
                return view('University_Pages.IT_Admin.MyProfile');
            }
        
            public function ManageUsers()
            {
                $faculty_members = FacultyMember::paginate(3);
                return view('University_Pages.IT_Admin.ManageUsers', compact('faculty_members'));
            }

            public function create()
            {
                return view('University_Pages.IT_Admin.CreateUsr');
            }  
        
            public function store(AddMembersRequest $request)
            {
                $faculty_member = FacultyMember::create($request->only('f_name','l_name','email','department','pass','rank'));
                return redirect()->route('ITAdminAccount.manage-users.index');
            }
        
            public function edit($id)
            {
                $faculty_member = FacultyMember::where('id',$id)->first();
                return view('University_Pages.IT_Admin.Permission',compact('faculty_member'));
            }
        
        
            public function update(AddMembersRequest $request ,$id)
            {
                $faculty_member = FacultyMember::where('id',$id)->first();
                $faculty_member->update($request->all());
                return redirect()->route('ITAdminAccount.manage-users.index');
            }
        
            public function delete($id)
            {
                $faculty_members = FacultyMember::where('id',$id)->first();
                $faculty_members->delete();
                return redirect()->route('ITAdminAccount.manage-users.index');                 
            }

            public function SignOut(string $id)
            {
                // Auth::logout();
                // return redirect()->route('Get_Started');
            }
        }