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
    public function __construct(){
        $this->middleware('permission:member_view')->only('ManageUsers');
        $this->middleware('permission:member_create')->only('create','store');
        $this->middleware('permission:member_edit')->only('edit','update');
        $this->middleware('permission:member_delete')->only('delete');        
    }
    

    public function index(Request $request)
    {
         $user =  auth()->user()->load('roles');
        
        $role = $user->roles()->first()->name;
        if($role== 'IT_Admin'){
            return view('University_Pages.IT_Admin.MyProfile',compact('user'));
        }elseif($role == 'Researcher'){
            return view('University_Pages.FM_Researcher.My_Profile',compact('user'));
        }elseif($role == 'Reviewer'){
            return view('University_Pages.FM_Reviewer_Researcher.My_Profile',compact('user'));
        }elseif($role == 'Promotion Admin'){
            return view('University_Pages.Promotion_Admin.MyProfile',compact('user'));
        }
        return view('Main_Pages.Main.Home',compact('user'));
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
        $faculty_member = FacultyMember::create($request->only('f_name','l_name','email','department','password','rank','phone','Academic_quali','bachelors','masters','phd','IBAN'));
        $faculty_member->assignRole('Researcher');
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

        $faculty_member->syncRoles($request->role);

        return redirect()->route('ITAdminAccount.manage-users.index');
    }

    public function delete($id)
    {
        $faculty_members = FacultyMember::where('id',$id)->first();
        $faculty_members->delete();
        return redirect()->route('ITAdminAccount.manage-users.index');
    }

       


    public function SignOut()
    {
         Auth::logout();
        return redirect()->route('Get_Started');
    }
}
