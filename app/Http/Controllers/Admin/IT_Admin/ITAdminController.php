<?php
namespace App\Http\Controllers\Admin\IT_Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddMembersRequest;
use App\Models\FacultyMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

        class ITAdminController extends Controller
        {

            public function index(Request $request)
            {
                $user = auth()->user();
                return view('University_Pages.IT_Admin.MyProfile',compact('user'));
            }

            public function ManageUsers()
            {
                $faculty_members = FacultyMember::with('roles')->paginate(12);
                return view('University_Pages.IT_Admin.ManageUsers', compact('faculty_members'));
            }

            public function create()
            {
                return view('University_Pages.IT_Admin.CreateUsr');
            }

            public function store(AddMembersRequest $request)
            {
                $faculty_member = FacultyMember::create($request->only('f_name','l_name','email','department','password','rank'));
                return redirect()->route('ITAdminAccount.manage-users.index');
            }

            public function edit($id)
            {
                $faculty_members = FacultyMember::with('roles')->where('id',$id)->get()
                ->map(function($faculty_member){
                    $faculty_member->role= $faculty_member->roles->first();

                    return $faculty_member;
                });
                $faculty_member = $faculty_members->first();

                $roles=Role::get();
                return view('University_Pages.IT_Admin.Permission',compact('faculty_member','roles'));
            }


            public function update(AddMembersRequest $request ,$id)
            {
                $faculty_member = FacultyMember::where('id',$id)->first();
                $faculty_member->update($request->except('role'));
                $faculty_member->assignRole($request->role);

                return redirect()->route('ITAdminAccount.manage-users.index');
            }

            public function delete($id)
            {
                $faculty_members = FacultyMember::where('id',$id)->first();
                $faculty_members->delete();
                return redirect()->route('ITAdminAccount.manage-users.index');
            }

            // public function UsersAndPermissions($id)
            // {
            //     return FacultyMember::with('role')->where('id',$id)->first();
            //     return view('University_Pages.IT_Admin.UsersAndPermissions', compact('faculty_members','role'));
            // }


            public function SignOut()
            {
                Auth::logout();
                return redirect()->route('Get_Started');
            }
        }
