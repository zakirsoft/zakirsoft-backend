<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'social_name' => 'required',
            'profile_name' => 'required',
            'social_link' => 'required|url'
        ],[
            'social_name.required' => 'Social media selection is Required.',
            'profile_name.unique' => 'Profile name field is Required.',
            'social_link.required' => 'Profile link field is Required.',
            'social_link.url' => 'Profile link Must be a Valid Link.',
        ]);

        $insert = new Social;
        $insert->social_media = $request->social_name;
        $insert->profile_name = $request->profile_name;
        $insert->profile_link = $request->social_link;
        $insert->save();
        return redirect()->back()->with('success', 'A Social Profile added Successfully');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'social_name' => 'required',
            'profile_name' => 'required',
            'social_link' => 'required|url'
        ],[
            'social_name.required' => 'Social media selection is Required.',
            'profile_name.unique' => 'Profile name field is Required.',
            'social_link.required' => 'Profile link field is Required.',
            'social_link.url' => 'Profile link Must be a Valid Link.',
        ]);

        $update = Social::findOrFail($id);
        $update->social_media = $request->social_name;
        $update->profile_name = $request->profile_name;
        $update->profile_link = $request->social_link;
        $update->save();
        return redirect()->back()->with('success', 'Social Profile has been Updated.');
    }

    public function destroy($id)
    {
        $social = Social::findOrFail($id);

        if ($social) {
            $social->delete();
        }
        return redirect()->back()->with('success', 'Social Profile has been Deleted.');
    }
}
