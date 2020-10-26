<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;

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
            'password'=>bcrypt('password'),
            'image'=>'storage/user/auth.png',
            'email_verified_at'=> Carbon::now(),
        ]);
        $role = Role::where('name', 'admin')->first();
        $user->assignRole($role->name);
    }
}
