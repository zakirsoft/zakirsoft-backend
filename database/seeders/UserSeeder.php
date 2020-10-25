<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'Admin',
            'email'=>'admin@zakirsoft.com',
            'password'=>bcrypt('password')
        ]);

        $role = Role::where('name', 'admin')->first();
        $user->assignRole($role->name);
    }
}
