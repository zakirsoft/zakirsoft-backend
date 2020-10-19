<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index', [
            'roles' => Role::paginate()
        ]);
    }


    public function create()
    {
        return view('admin.role.create');
    }


    public function role_create(Request $request)
    {
        $request->validate([
            'role_name' => ['required', 'min:2', 'unique:roles,name']
        ],[
            'role_name.required' => 'Role name is Required.',
            'role_name.min' => 'Role name must be at least 2 Characters.',
            'role_name.unique' => 'This Role name has already Exist.'
        ]);

        Role::create([
            'name' => $request->role_name,
        ]);

        return back()->with('create', 'Role created Successfully');
    }


    public function role_edit($id)
    {
        $roles = Role::findOrFail($id);
        return view('admin.role.edit', compact('roles'));
    }


    public function role_update(Request $request)
    {
        $request->validate([
            'role_name' => ['required', 'min:2', 'unique:roles,name']
        ],[
            'role_name.required' => 'Role name is Required.',
            'role_name.min' => 'Role name must be at least 2 Characters.',
            'role_name.unique' => 'Already exist! Choose new Rolename.'
        ]);

        $update = Role::findOrFail($request->role_id);
        $update->name = $request->role_name;
        $update->save();

        return redirect(route('RoleIndex'))->with('update', 'Role name Updated Successfully');
    }


    public function permission_assign($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('admin.role.assign', compact('role', 'permissions'));
    }


    public function permission_assign_post(Request $request)
    {
        $role = Role::findOrFail($request->role_id);
        $role->givePermissionTo($request->permissions);

        return redirect(route('RoleIndex'))->with('assign', 'Permission has been assigned');
    }


    public function role_delete($id)
    {
        $role = Role::findOrFail($id);

        if($role){
            $role->delete();
        }

        return back()->with('delete', 'Role has been Deleted.');
    }

}
