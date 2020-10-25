<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Footer;
use App\Models\Social;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:footer show|footer create|footer edit|footer delete']);
    }

    public function index()
    {
        $footers = Footer::all();
        $ContentCount = Footer::all()->count();
        $socials = Social::all();
        return view('admin.footer.index', compact('footers', 'ContentCount', 'socials'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => ['required', 'email', 'unique:footers,email'],
            'content' => ['required']
        ],[
            'email.required' => 'Email field is Required',
            'email.email' => 'Valid Email is Required',
            'email.unique' => 'This Email already exists, Enter another.',
            'content.required' => 'Email field is Required',
        ]);

        Footer::insert([
            'email' => $request->email,
            'content' => $request->content,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Footer content added Successfully');
    }

    public function update(Request $request, $id)
    {
        $update = Footer::findOrFail($id);
        $update->email = $request->email;
        $update->content = $request->content;
        $update->save();

        return redirect()->back()->with('success', 'Footer content has been Updated.');
    }

    public function destroy($id)
    {
        $content = Footer::find($id);

        if($content){
            $content->delete();
        }

        return redirect()->back()->with('success', 'Footer content has been Deleted.');
    }
}
