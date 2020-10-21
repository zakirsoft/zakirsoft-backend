<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Template\Template;

use function Symfony\Component\String\b;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.about.team.index')->with('teams', $team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.team.create');
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
            'name'=>'required',
            'position'=>'required',
            'image' => 'required|image|mimes:png,jpg'
        ]);

        $team = Team::create([
            'name'=> $request->name,
            'position'=> $request->position,
        ]);

        if( $request->has('image')){
            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();

            Storage::putFileAs('image', $image, $imageName);
            $team->image = 'storage/image/'. $imageName;
            $team->save();
        }
        return back()->with('success', 'Member Add To Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.about.team.edit')->with('teams',$team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:png,jpg',

        ]);
        if( $request->has('image')){
            $team = Team::find($id);

            if(file_exists($team->image)){
                unlink(public_path($team->image));
            }

            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();
            Storage::putFileAs('/image', $image, $imageName);
            $team->image = 'storage/image/' . $imageName;
            $team->save();
        }

        session()->flash('success', 'Portfolio Deleted Successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old_image = Team::find($id);
        if(file_exists($old_image->image)){
            unlink(base_path('public/'.$old_image->image));
            $old_image->delete();
        }
        session()->flash('delete', 'Member Deleted Successfully!');
        return back();
    }
}
