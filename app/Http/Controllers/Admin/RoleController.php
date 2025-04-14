<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function index(Request $request)
    {
        $roles = Role::paginate(8);
        return view ('Main_Pages.Roles.index',compact('roles'));
    }



    public function create()
    {
        $permissions = Permission::all()->groupBy(function($permission){
            return explode('_',$permission->name)[0];
        });
        return view ('Main_Pages.Roles.create',compact('permissions'));
    }



    public function store(Request $request)
    {
        $role = Role::findOrCreate($request->name);
        $role->syncPermissions($request->permission_name);
        return redirect()->route('roles.index');
    }



    public function show($id){

        $role = Role::with('permissions')->where('id',$id)->first();
        return view('Main_Pages.Roles.show',compact('role'));   
    }


    public function delete($id){

        $role = Role::where('id',$id)->first();
        $role->delete();
        return redirect()->route('roles.index');
    
    }
}
