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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = Footer::all();
        $ContentCount = Footer::all()->count();
        $socials = Social::all();
        return view('admin.footer.index', compact('footers', 'ContentCount', 'socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Footer::findOrFail($id);
        $update->email = $request->email;
        $update->content = $request->content;
        $update->save();

        return redirect()->back()->with('success', 'Footer content has been Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Footer::find($id);

        if($content){
            $content->delete();
        }

        return redirect()->back()->with('success', 'Footer content has been Deleted.');
    }
}
