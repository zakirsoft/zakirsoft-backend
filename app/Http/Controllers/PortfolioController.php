<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $portfolio_list = Portfolio::SimplePaginate(10);
        return view('admin.portfolio.index',compact('portfolio_list'));
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
        // return request('our_role');
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

        $portfolio = Portfolio::create([
            'title' => $request->title,
            'image' => 'image',
            'title_slug' =>Str::slug($request->title),
            'description' => $request->description,
            'live_link' => $request->live_link,
            'bahance_link' => $request->bahance_link,
            'project_length' => $request->project_length,
            'our_role' => $request->our_role,
            'tool_used' => $request->tool_used,
            'client_name' => $request->client_email,
            'client_email' => $request->client_email,
            'created_at' => Carbon::now(),
        ]);

        if($request->has('image')) {
            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();

            Storage::putFileAs('portfolio', $image, $imageName);
            $portfolio->image = 'storage/portfolio/'. $imageName;
            $portfolio->save();
        }

        // Session::flash('success', '');
        return back()->with('insert', 'Portfolio added Successfully');
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
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
       return view('admin.portfolio.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
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
        ]);

        if($request->has('image')) {

                // old image delete
                $old_image = Portfolio::findOrFail($id);

                if (file_exists($old_image->image)) {
                    unlink(base_path('public/'.$old_image->image));
                }

                    $image = $request->image;
                    $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();
                    Storage::putFileAs('/portfolio', $image, $imageName);
                    $image_address = 'storage/portfolio/'. $imageName;

                    Portfolio::findOrFail($id)->update([
                        'title' => $request->title,
                        'image' =>$image_address,
                        'title_slug' =>Str::slug($request->title),
                        'description' => $request->description,
                        'live_link' => $request->live_link,
                        'bahance_link' => $request->bahance_link,
                        'project_length' => $request->project_length,
                        'our_role' => $request->our_role,
                        'tool_used' => $request->tool_used,
                        'client_name' => $request->client_email,
                        'client_email' => $request->client_email,
                        'updated_at' => Carbon::now()
                    ]);


                    return redirect('/portfolio')->with('update', 'Portfolio Updated Successfully With Image');





        }else {

            Portfolio::findOrFail($id)->update([
                'title' => $request->title,
                'title_slug' =>Str::slug($request->title),
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

            return  redirect('/portfolio')->with('update', 'Portfolio Updated Successfully Without Image');


        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $old_image = Portfolio::findOrFail($id);

        if(file_exists($old_image->image)){

            unlink(base_path('public/'.$old_image->image));
            $old_image->delete();
            return redirect()->back()->with('delete', 'Portfolio Successfully Delete');

        }else{

            $old_image->delete();
            return redirect()->back()->with('delete', 'Portfolio Successfully Delete');
        }



    }
}
