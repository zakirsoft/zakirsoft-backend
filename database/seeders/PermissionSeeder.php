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
        Permission::create([ 'name' => 'post list' ]);
        Permission::create([ 'name' => 'post show' ]);
        Permission::create([ 'name' => 'post create' ]);
        Permission::create([ 'name' => 'post edit' ]);
        Permission::create([ 'name' => 'post delete' ]);
        Permission::create([ 'name' => 'project list' ]);
        Permission::create([ 'name' => 'project show' ]);
        Permission::create([ 'name' => 'project create' ]);
        Permission::create([ 'name' => 'project edit' ]);
        Permission::create([ 'name' => 'project delete' ]);
        Permission::create([ 'name' => 'user list' ]);
        Permission::create([ 'name' => 'user show' ]);
        Permission::create([ 'name' => 'user create' ]);
        Permission::create([ 'name' => 'user edit' ]);
        Permission::create([ 'name' => 'user delete' ]);
        Permission::create([ 'name' => 'role list' ]);
        Permission::create([ 'name' => 'role show' ]);
        Permission::create([ 'name' => 'role create' ]);
        Permission::create([ 'name' => 'role edit' ]);
        Permission::create([ 'name' => 'role delete' ]);
        Permission::create([ 'name' => 'permission list' ]);
        Permission::create([ 'name' => 'permission show' ]);
        Permission::create([ 'name' => 'permission create' ]);
        Permission::create([ 'name' => 'permission edit' ]);
        Permission::create([ 'name' => 'permission delete' ]);
    }
}
