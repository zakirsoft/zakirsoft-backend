<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = Permission::create([ 'name' => 'post list' ]);
        $permission = Permission::create([ 'name' => 'post show' ]);
        $permission = Permission::create([ 'name' => 'post create' ]);
        $permission = Permission::create([ 'name' => 'post edit' ]);
        $permission = Permission::create([ 'name' => 'post delete' ]);
        $permission = Permission::create([ 'name' => 'project list' ]);
        $permission = Permission::create([ 'name' => 'project show' ]);
        $permission = Permission::create([ 'name' => 'project create' ]);
        $permission = Permission::create([ 'name' => 'project edit' ]);
        $permission = Permission::create([ 'name' => 'project delete' ]);
        $permission = Permission::create([ 'name' => 'user list' ]);
        $permission = Permission::create([ 'name' => 'user show' ]);
        $permission = Permission::create([ 'name' => 'user create' ]);
        $permission = Permission::create([ 'name' => 'user edit' ]);
        $permission = Permission::create([ 'name' => 'user delete' ]);
        $permission = Permission::create([ 'name' => 'role list' ]);
        $permission = Permission::create([ 'name' => 'role show' ]);
        $permission = Permission::create([ 'name' => 'role create' ]);
        $permission = Permission::create([ 'name' => 'role edit' ]);
        $permission = Permission::create([ 'name' => 'role delete' ]);
        $permission = Permission::create([ 'name' => 'permission list' ]);
        $permission = Permission::create([ 'name' => 'permission show' ]);
        $permission = Permission::create([ 'name' => 'permission create' ]);
        $permission = Permission::create([ 'name' => 'permission edit' ]);
        $permission = Permission::create([ 'name' => 'permission delete' ]);
    }
}
