<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('admin.user.create');
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
            'image' => ['required']
        ],[
            'name.required' => 'Full Name is Required.',
            'email.required' => 'Enter E-Mail is Required.',
            'email.email' => 'Enter a Valid E-Mail address.',
            'email.unique' => 'E-Mail already exist in Our System, Choose Another!',
            'password.required' => 'Password field is Required.',
            'image.required' => 'Choose a Profile Image.'
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


        return redirect()->back()->with('create', 'User created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

       return redirect()->back()->with('delete', 'A User has been Deleted Successfully');
    }
}
