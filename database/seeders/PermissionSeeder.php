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
        // portfolio permission
        Permission::create([ 'name' => 'project list' ]);
        Permission::create([ 'name' => 'project show' ]);
        Permission::create([ 'name' => 'project create' ]);
        Permission::create([ 'name' => 'project edit' ]);
        Permission::create([ 'name' => 'project delete' ]);

        // user permission
        Permission::create([ 'name' => 'user list' ]);
        Permission::create([ 'name' => 'user show' ]);
        Permission::create([ 'name' => 'user create' ]);
        Permission::create([ 'name' => 'user edit' ]);
        Permission::create([ 'name' => 'user delete' ]);

        // role permission
        Permission::create([ 'name' => 'role list' ]);
        Permission::create([ 'name' => 'role show' ]);
        Permission::create([ 'name' => 'role create' ]);
        Permission::create([ 'name' => 'role edit' ]);
        Permission::create([ 'name' => 'role delete' ]);

        // team permission
        Permission::create([ 'name' => 'team list' ]);
        Permission::create([ 'name' => 'team show' ]);
        Permission::create([ 'name' => 'team create' ]);
        Permission::create([ 'name' => 'team edit' ]);
        Permission::create([ 'name' => 'team delete' ]);
    }
}
