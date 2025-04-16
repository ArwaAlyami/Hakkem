<?php

namespace Database\Seeders;

use App\Models\FacultyMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // it admin permissions (he takes all the permissions)

            'role_view',  //done
            'role_create',  //done
            'role_delete',  //done
            'role_show',  //done

            'member_view',  //done
            'member_create',  //done
            'member_edit',  //done
            'member_delete',  //done


            // researcher permissions
            'research_view',  //done
            'research_add',  //done
            'research_file_show',  //done
            'research_delete',  //done

            'request_list_view',  //done
            'feedback_view',  
            'send_request',  //done


            // reviewer permissions 
            'receive_request',  //done 
            'feedback_create',
            'feedback_send',


            // promotion admin permissions
            'received_promotion_request',
            'list_view',
           

        ];  
        foreach($permissions as $permission){
            Permission::create(['name'=>$permission,'guard_name'=>'web']);
        }
        
        $role = Role::create(['name'=>'IT_Admin','guard_name'=>'web']);
        $role->syncPermissions($permissions);
        $faculty_member = FacultyMember::where('email','Arwa@Sarrar.com')->first();
        $faculty_member->assignRole('IT_Admin');
    }
}
