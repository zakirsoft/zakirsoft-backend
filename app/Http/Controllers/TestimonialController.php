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

    public function index()
    {
        $testimonials = Testimonial::SimplePaginate(10);
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'name' => 'required',
            'position' => 'required'
        ],[
            'content.required' => 'Content field is required.',
            'name.required' => 'Name field is required.',
            'position.required' => 'Position field is required.',
        ]);

        Testimonial::insert([
            'content' => $request->content,
            'name' => $request->name,
            'position' => $request->position,
            'created_at' => Carbon::now()
        ]);

        session()->flash('success', 'Testimonial Added Successfully!');
        return redirect()->route('testimonial.create');
    }

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
