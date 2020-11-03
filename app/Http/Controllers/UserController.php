<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Laravel\Ui\Presets\React;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:user show|user create|user list|user edit|role assign|user delete']);
    }

    public function index()
    {
        $users = User::latest()->simplepaginate(10);
        $user_count = User::all()->count();

        return view('admin.user.index', compact('users', 'user_count'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','min:8'],
            'image' => ['required','image', 'mimes:jpeg,png,jpg,svg,webp','size:3072'],
            'roles' => ['required']
        ],[
            'name.required' => 'Full Name is Required.',
            'email.required' => 'Enter E-Mail is Required.',
            'email.email' => 'Enter a Valid E-Mail address.',
            'email.unique' => 'E-Mail already exist in Our System, Choose Another!',
            'password.required' => 'Password field is Required.',
            'image.size' => 'Image must be 3 or less than 3 MB',
            'image.mimes' => 'Image supported format jpeg, png, svg, webp',
            'roles.required' => 'Please assign a user Role.'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);


        if($request->has('image')) {
            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();
            Storage::putFileAs('/user', $image, $imageName);

            $user->image = 'storage/user/'. $imageName;
            $user->save();
        }

        $user->assignRole($request->roles);
        return redirect()->back()->with('success', 'User created Successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required'],
        ],[
            'name.required' => 'Full Name is Required.',
            'email.required' => 'Enter E-Mail is Required.',
            'email.email' => 'Enter a Valid E-Mail address.',
        ]);

        $img = User::findOrFail($id);
        if (file_exists($img->image)) {
            unlink($img->image);
        }

        if($request->has('image')) {
            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();
            Storage::putFileAs('/user', $image, $imageName);
            $img->image = 'storage/user/'. $imageName;
            $img->save();
        }

        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect(route('user.index'))->with('create', 'User updated Successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if (file_exists($user->image)) {
            unlink($user->image);
        }

        if($user){
            $user->delete();
        }

       return redirect()->back()->with('success', 'A User has been Deleted Successfully');
    }

    public function role_assign(User $user)
    {
        $userRoles = $user->roles;
        $selectedRolesIdArray = [];
        foreach ($userRoles as $role) {
            array_push($selectedRolesIdArray, $role->id);
        }
        $roles = Role::latest()->get()->except($selectedRolesIdArray);

        return view('admin.user.role', compact('user', 'roles', 'userRoles'));
    }

    public function role_assign_store(Request $request, User $user)
    {
        $user->syncRoles($request->roles);

        Session::flash('success', 'User role updated successfully');
        return redirect()->route('user.index');
    }

}
