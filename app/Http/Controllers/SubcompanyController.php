<?php

namespace App\Http\Controllers;

use App\Models\Subcompany;
use Illuminate\Http\Request;

class SubcompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.subcompany.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcompany.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcompany  $subcompany
     * @return \Illuminate\Http\Response
     */
    public function show(Subcompany $subcompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcompany  $subcompany
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcompany $subcompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcompany  $subcompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcompany $subcompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcompany  $subcompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcompany $subcompany)
    {
        //
    }
}
