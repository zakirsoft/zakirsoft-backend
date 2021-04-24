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
        // user permission
        Permission::create([ 'name' => 'user show' ]);
        Permission::create([ 'name' => 'user create' ]);
        Permission::create([ 'name' => 'user list' ]);
        Permission::create([ 'name' => 'user edit' ]);
        Permission::create([ 'name' => 'role assign' ]);
        Permission::create([ 'name' => 'user delete' ]);

        // role permission
        Permission::create([ 'name' => 'role show' ]);
        Permission::create([ 'name' => 'role list' ]);
        Permission::create([ 'name' => 'role create' ]);
        Permission::create([ 'name' => 'permission assign' ]);
        Permission::create([ 'name' => 'role edit' ]);
        Permission::create([ 'name' => 'role delete' ]);

        // portfolio permission
        Permission::create([ 'name' => 'category show' ]);
        Permission::create([ 'name' => 'category create' ]);
        Permission::create([ 'name' => 'category list' ]);
        Permission::create([ 'name' => 'category status' ]);
        Permission::create([ 'name' => 'category edit' ]);
        Permission::create([ 'name' => 'category delete' ]);
        //
        Permission::create([ 'name' => 'portfolio show' ]);
        Permission::create([ 'name' => 'portfolio list' ]);
        Permission::create([ 'name' => 'portfolio create' ]);
        Permission::create([ 'name' => 'portfolio edit' ]);
        Permission::create([ 'name' => 'portfolio delete' ]);

        // testimonial permission
        Permission::create([ 'name' => 'testimonial show' ]);
        Permission::create([ 'name' => 'testimonial create' ]);
        Permission::create([ 'name' => 'testimonial list' ]);
        Permission::create([ 'name' => 'testimonial delete' ]);

        // career permission
        Permission::create([ 'name' => 'career show' ]);
        Permission::create([ 'name' => 'career create' ]);
        Permission::create([ 'name' => 'career edit' ]);
        Permission::create([ 'name' => 'career delete' ]);

        // team permission
        Permission::create([ 'name' => 'team show' ]);
        Permission::create([ 'name' => 'team create' ]);
        Permission::create([ 'name' => 'team edit' ]);
        Permission::create([ 'name' => 'team delete' ]);

        // footer permission
        Permission::create([ 'name' => 'footer show' ]);
        Permission::create([ 'name' => 'footer create' ]);
        Permission::create([ 'name' => 'footer edit' ]);
        Permission::create([ 'name' => 'footer delete' ]);
    }
}
