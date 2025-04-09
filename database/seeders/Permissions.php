<?php

namespace Database\Seeders;

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
            'member_view',
            'member_create',
            'member_edit',
            'member_delete',

            'research_view',
            'research_add',
            'research_file_show',
            'research_delete',

            'feedback_view',
            'feedback_create',

            'receive_request',
            'send_request',

        ];  
        foreach($permissions as $permission){
            Permission::findOrCreate($permission);
        }
        $role = Role::findOrCreate('system_admin');
        $role->syncPermissions($permissions);
        $user = User::where('email','Arwa@yami.com')->first();
        $user->assignRole('system_admin');
    }
}
