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
        return view('admin.technology.category');
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
     * Display the specified resource.
     *
     * @param  \App\Models\TechnologyCategory  $technologyCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TechnologyCategory $technologyCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TechnologyCategory  $technologyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TechnologyCategory $technologyCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TechnologyCategory  $technologyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TechnologyCategory $technologyCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TechnologyCategory  $technologyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TechnologyCategory $technologyCategory)
    {
        //
    }
}
