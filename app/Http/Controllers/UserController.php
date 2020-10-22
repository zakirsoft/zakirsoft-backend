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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->simplepaginate(10);
        $user_count = User::all()->count();

        return view('admin.user.index', compact('users', 'user_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','min:8'],
            'image' => ['required'],
            'roles' => ['required']
        ],[
            'name.required' => 'Full Name is Required.',
            'email.required' => 'Enter E-Mail is Required.',
            'email.email' => 'Enter a Valid E-Mail address.',
            'email.unique' => 'E-Mail already exist in Our System, Choose Another!',
            'password.required' => 'Password field is Required.',
            'image.required' => 'Choose a Profile Image.',
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','min:8'],
        ],[
            'name.required' => 'Full Name is Required.',
            'email.required' => 'Enter E-Mail is Required.',
            'email.email' => 'Enter a Valid E-Mail address.',
            'email.unique' => 'E-Mail already exist in Our System, Choose Another!',
            'password.required' => 'Password field is Required.',
        ]);

        $img = User::findOrFail($id);

        if (file_exists($img->image)) {
            unlink($img->image);
        }

        /// Nxt day

        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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


    // Assign Role Area

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
