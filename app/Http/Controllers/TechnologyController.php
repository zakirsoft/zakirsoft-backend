<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use App\Models\TechnologyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = Technology::with('category')->latest()->paginate(10);
        return view('admin.technology.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = TechnologyCategory::all();
        return view('admin.technology.create', compact('categories'));
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
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'required',
        ],[
            'category_id.required' => 'The category field is required.',
        ]);

        $technology = Technology::create($request->except('image'));

        if($request->has('image')) {
            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();
            Storage::putFileAs('/technology', $image, $imageName);
            $technology->image = 'storage/technology/'. $imageName;
            $technology->save();
        }

        session()->flash('success', 'Technology Added Successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function edit(Technology $technology)
    {
        $categories = TechnologyCategory::all();
        return view('admin.technology.edit', compact('categories','technology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technology $technology)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
        ],[
            'category_id.required' => 'The category field is required.',
        ]);

        $technology->update($request->except('image'));

        if($request->has('image')) {
            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();
            Storage::putFileAs('/technology', $image, $imageName);
            $technology->image = 'storage/technology/'. $imageName;
            $technology->save();
        }

        session()->flash('success', 'Technology Updated Successfully!');
        return redirect(route('technology.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technology $technology)
    {
        if ($technology) {
            $technology->delete();
        }

        session()->flash('success', 'Technology Deleted Successfully!');
        return back();
    }
}
