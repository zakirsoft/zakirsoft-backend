<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:testimonial show|testimonial create|testimonial list|testimonial delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::SimplePaginate(10);
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'purpose' => 'required',
            'content' => 'required',
            'name' => 'required',
            'position' => 'required'
        ],[
            'purpose.required' => 'Purpose field is required.',
            'content.required' => 'Content field is required.',
            'name.required' => 'Name field is required.',
            'position.required' => 'Position field is required.',
        ]);

        Testimonial::insert([
            'purpose' => $request->purpose,
            'content' => $request->content,
            'name' => $request->name,
            'position' => $request->position,
            'created_at' => Carbon::now()
        ]);

        session()->flash('success', 'Testimonial Added Successfully!');
        return redirect()->route('testimonial.create');

        // return back()->with('insert', 'Testimonial added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $test = Testimonial::find($id);

        if($test){
            $test->delete();
        }

        session()->flash('success', 'Testimonial Deleted Successfully!');
        return redirect()->route('testimonial.index');

    }
}
