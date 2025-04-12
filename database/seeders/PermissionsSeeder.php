<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionsSeeder extends Seeder
{
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

        foreach ($permissions as $permission) {
            if (!Permission::where('name', $permission)->exists()) {
                Permission::create(['name' => $permission]);
            }
        }

       
        $rolesWithPermissions = [
            'it_admin' => $permissions,

            'researcher' => [
                'research_view',
                'research_add',
                'research_file_show',
            ],

            'reviewer' => [
                'research_view',
                'research_file_show',
                'research_delete',
                'feedback_view',
                'feedback_create',
            ],

            'researcher_reviewer' => array_unique(array_merge(
                [
                    'research_view',
                    'research_add',
                    'research_file_show',
                ],
                [
                    'research_delete',
                    'feedback_view',
                    'feedback_create',
                ]
            )),

            'independent_researcher' => [
                'research_add',
                'send_request',
            ],

            'independent_reviewer' => [
                'receive_request',
                'research_file_show',
            ],

            'system_admin' => $permissions,
        ];

        
        foreach ($rolesWithPermissions as $roleName => $rolePermissions) {
            $role = Role::findOrCreate($roleName);
            $role->syncPermissions($rolePermissions);
        }

        
        $user = User::where('email', 'Arwa@yami.com')->first();
        if ($user) {
            $user->assignRole('system_admin');
        }
    }
}
