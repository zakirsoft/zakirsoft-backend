<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:role show|role list|role create|permission assign|role edit|role delete']);
    }

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

    public function store(Request $request)
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

        return back()->with('success', 'Role created Successfully');
    }

    public function edit($id)
    {
        $roles = Role::findOrFail($id);
        return view('admin.role.edit', compact('roles'));
    }

    public function update(Request $request)
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

        return redirect(route('role.index'))->with('success', 'Role name Updated Successfully');
    }


    public function permission_assign($id)
    {
        $role = Role::findOrFail($id);
        $rolePermissions = $role->permissions;

        $selectedPermissionsIdArray = [];
        foreach ($rolePermissions as $permission) {
            array_push($selectedPermissionsIdArray, $permission->id);
        }

        $permissions = Permission::latest()->get()->except($selectedPermissionsIdArray);

        return view('admin.role.assign', compact('role', 'permissions', 'rolePermissions'));
    }

    public function permission_assign_post(Request $request, Role $role)
    {
        $role->syncPermissions($request->permissions);
        return redirect(route('role.index'))->with('success', 'Permission has been assigned');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        if($role){
            $role->delete();
        }
        
        return back()->with('success', 'Role has been Deleted.');
    }
}
