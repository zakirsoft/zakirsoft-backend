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
        $posts = Jobpost::oldest('order')->paginate(5);
        return view('admin.career.job.index', compact('posts'));
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
    public function show(Jobpost $post)
    {
        return view('admin.career.job.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobpost $post)
    {
        return view('admin.career.job.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function update(JobpostFormRequest $request, Jobpost $post)
    {
        $post->update($request->all());

        session()->flash('success', 'Job Post Updated Successfully!');
        return redirect(route('jobpost.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobpost  $jobpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobpost $post)
    {
        if ($post) {
            $post->delete();
        }

        session()->flash('success', 'Job Post Deleted Successfully!');
        return back();
    }

    /**
     * status active.
     */
    public function active(Jobpost $post)
    {
        if ($post) {
            $post->update(['status' => true]);
        }

        session()->flash('success', 'Job Post Activated Successfully!');
        return back();
    }

    /**
     * status inactive.
     */
    public function inactive(Jobpost $post)
    {
        if ($post) {
            $post->update(['status' => false]);
        }

        session()->flash('success', 'Job Post Inactivated Successfully!');
        return back();
    }
}
