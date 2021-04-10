<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::first();

        return view('admin.about.index', compact('about'));
    }

    public function update(Request $request, About $about){
        $this->validate($request, [ 'content' => 'required' ]);

        $about->update(['content' => $request->content]);

        session()->flash('success', 'About us updated Successfully!');
        return back();
    }
}
