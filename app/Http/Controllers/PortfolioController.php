<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.portfolio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
            'description' => 'required',
            'live_link' => 'required',
            'bahance_link' => 'required',
            'project_length' => 'required',
            'our_role' => 'required',
            'tool_used' => 'required',
            'client_name' => 'required',
            'client_email' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->has('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/portfolioimages'), $imageName);

            Portfolio::insert([
                'title' => $request->title,
                'title_slug' =>Str::slug($request->title),
                'image' => $imageName,
                'description' => $request->description,
                'live_link' => $request->live_link,
                'bahance_link' => $request->bahance_link,
                'project_length' => $request->project_length,
                'our_role' => $request->our_role,
                'tool_used' => $request->tool_used,
                'client_name' => $request->client_email,
                'client_email' => $request->client_email,
                'created_at' => Carbon::now()
            ]);

            return back()->with('insert', 'Portfolio added Successfully');

        }else {
            return back()->with('error', 'Something went wrong!');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
