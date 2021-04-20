<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobpostFormRequest;
use App\Models\Jobpost;
use Illuminate\Http\Request;

class JobpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.career.job.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobpostFormRequest $request)
    {
        Jobpost::create($request->all());

        session()->flash('success', 'Job Post Added Successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function show(Jobpost $jobpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobpost $jobpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobpost $jobpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobpost $jobpost)
    {
        //
    }
}
