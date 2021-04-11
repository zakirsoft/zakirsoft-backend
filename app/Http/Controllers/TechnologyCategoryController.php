<?php

namespace App\Http\Controllers;

use App\Models\TechnologyCategory;
use Illuminate\Http\Request;

class TechnologyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = TechnologyCategory::latest()->paginate(10);

        return view('admin.technology.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.technology.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'name' => 'required' ]);

        TechnologyCategory::create($request->all());

        session()->flash('success', 'Technology Added Successfully!');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TechnologyCategory  $technologyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TechnologyCategory $category)
    {
        return view('admin.technology.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TechnologyCategory  $technologyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TechnologyCategory $category)
    {
        $this->validate($request,[ 'name' => 'required' ]);

        $category->update($request->all());

        session()->flash('success', 'Technology Updated Successfully!');
        return redirect(route('technology.category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TechnologyCategory  $technologyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TechnologyCategory $category)
    {
        if ($category) {
            $category->delete();
        }

        session()->flash('success', 'Technology Added Successfully!');
        return back();
    }
}
