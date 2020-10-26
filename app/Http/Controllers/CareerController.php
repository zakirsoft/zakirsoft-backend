<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CareerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:career show|career create|career edit|career delete']);
    }

    public function index()
    {
        $career_list = Career::latest()->SimplePaginate(10);
        $career_list_count = Career::all()->count();
        return view('admin.career.index',compact('career_list','career_list_count'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ],[
            'title.required' => 'Title field is required.',
            'content.required' => 'Content field is required.'
        ]);

        Career::create([
            'title' => $request->title,
            'content' =>$request->content,
            'created_at' => Carbon::now(),
        ]);

        session()->flash('success', 'Career Content Added Successfully!');
        return redirect()->route('career.index');
    }

    public function edit($id)
    {
        $career = Career::findOrFail($id);
       return view('admin.career.edit',compact('career'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ],[
            'title.required' => 'Title field is required.',
            'content.required' => 'Content field is required.'
        ]);

        Career::findOrFail($id)->update([
            'title' => $request->title,
            'content' =>$request->content,
            'updated_at' => Carbon::now(),
        ]);

        session()->flash('success', 'Career Content Updated Successfully!');
        return redirect()->route('career.index');

    }

    public function destroy($id)
    {
        $career = Career::findOrFail($id);

        if($career){

            $career->delete();

            session()->flash('success', 'Carrer Content Deleted Successfully!');
            return redirect()->route('career.index');

        }else{

            session()->flash('success', 'Carrer Content Deleted Successfully!');
            return redirect()->route('career.index');
        }

    }
}
