<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'super-admin']);

        $permissions=[
            'Blog'=>[
                'create.blog',
                'edit.blog',
                'update.blog'
            ],
             'Role'=>[
                'create.role',
                'edit.role',
                'delete.role'
            ],
             'User'=>[
              'edit.user',
              'delete.user'
            ],
        ];

        foreach($permissions as $k=> $permission){
            foreach($permission as $item){
               $per=Permission::create([
                   'name' => $item,
                   'group_name'=>$k
                   ]);

            }
        }

    }
}
