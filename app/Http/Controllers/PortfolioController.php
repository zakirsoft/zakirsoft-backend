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
            'live_link' => 'required|url',
            'bahance_link' => 'required|url',
            'project_length' => 'required',
            'our_role' => 'required',
            'tool_used' => 'required',
            'client_name' => 'required',
            'client_email' => 'required',
            'work_type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ],[
            'title.required' => 'Title field is required!',
            'description.required' => 'Description field is required!',
            'live_link.required' => 'Live link field is required!',
            'bahance_link.required' => 'Bahance link field is required!',
            'project_length.required' => 'Project length field is required!',
            'our_role.required' => 'Our role field is required!',
            'tool_used.required' => 'Tool used field is required!',
            'client_name.required' => 'Client name field is required!',
            'client_email.required' => 'Client email field is required!',
            'work_type.required' => 'Work type field is required!',
            'image.required' => 'Image field is required!',
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
            'work_type' => $request->work_type,
            'created_at' => Carbon::now(),
        ]);

        if($request->has('image')) {
            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();

            Storage::putFileAs('portfolio', $image, $imageName);
            $portfolio->image = 'storage/portfolio/'. $imageName;
            $portfolio->save();
        }

        session()->flash('success', 'Portfolio added Successfully!');
        return redirect()->route('portfolio.create');

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
            'live_link' => 'required|url',
            'bahance_link' => 'required|url',
            'project_length' => 'required',
            'our_role' => 'required',
            'tool_used' => 'required',
            'client_name' => 'required',
            'client_email' => 'required',
        ],[
            'title.required' => 'Title field is required!',
            'description.required' => 'Description field is required!',
            'live_link.required' => 'Live link field is required!',
            'bahance_link.required' => 'Bahance link field is required!',
            'live_link.required' => 'Live link must be link!',
            'bahance_link.required' => 'Bahance link  must be link!',
            'project_length.required' => 'Project length field is required!',
            'our_role.required' => 'Our role field is required!',
            'tool_used.required' => 'Tool used field is required!',
            'client_name.required' => 'Client name field is required!',
            'client_email.required' => 'Client email field is required!',
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
                        'work_type' => $request->work_type,
                        'updated_at' => Carbon::now()
                    ]);


                    session()->flash('success', 'Portfolio Updated Successfully With Image!');
                    return redirect()->route('portfolio.index');

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
                'work_type' => $request->work_type,
                'created_at' => Carbon::now()
            ]);

            session()->flash('success', 'Portfolio Updated Successfully Without Image!');
            return redirect()->route('portfolio.index');

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

            session()->flash('danger', 'Portfolio Deleted Successfully!');
            return redirect()->route('portfolio.index');

        }else{

            $old_image->delete();

            session()->flash('danger', 'Portfolio Deleted Successfully!');
            return redirect()->route('portfolio.index');
        }



    }
}