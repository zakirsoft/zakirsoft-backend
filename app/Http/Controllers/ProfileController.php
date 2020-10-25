<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function edit($id)
    {
        return view('admin.profile.edit');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);

        if ($request->password) {
            if ($user){

                $password_chekck = Hash::check($request->current_password,Auth::user()->password);
                if ($password_chekck) {
                    $user->update([
                        'name' => $request->name,
                        'password' => bcrypt($request->password),
                    ]);

                    session()->flash('success', 'Your Profile Updated Successfully!');
                    return back();
                }else{
                    session()->flash('error', "Your current password does'nt match of our records!");
                    return back();
                }
            }
        }
        else{
            $user->update([
                'name' => $request->name,
            ]);

            session()->flash('success', "Your Profile Updated Successfully!!");
            return back();
        }
    }
}
