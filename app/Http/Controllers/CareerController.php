<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career_list = Career::latest()->SimplePaginate(10);
        $career_list_count = Career::all()->count();
        return view('admin.career.index',compact('career_list','career_list_count'));
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

        // notify()->success('Career Content Added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = Career::findOrFail($id);
       return view('admin.career.edit',compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);

        if($career){

            $career->delete();

            session()->flash('danger', 'Carrer Content Deleted Successfully!');
            return redirect()->route('career.index');

        }else{

            session()->flash('danger', 'Carrer Content Deleted Successfully!');
            return redirect()->route('career.index');
        }


    }
}
