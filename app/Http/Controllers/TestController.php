<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class TestController extends Controller
{
    public function index(){
        // $role = Role::create([
        //     'name' => $request->name,
        // ]);

        // $permission = Permission::create([
        //     'name' => 'post list'
        // ]);

        // dd($permission);

        $role = Role::where('name', 'admin')->first();
        // $permission = Permission::where('name', 'post list')->first();


        $permission = Permission::create([
            'name' => 'post create'
        ]);

        $role->givePermissionTo($permission);

        return response()->json($role, 200);


        dd($role);
    }

}
