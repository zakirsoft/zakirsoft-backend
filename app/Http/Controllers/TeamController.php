<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Template\Template;

use function Symfony\Component\String\b;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.team.index')->with('teams', $team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10048'
        ]);

        $team = Team::create([
            'name'=> $request->name,
            'position'=> $request->position,
            'image'=>"image",
        ]);

        if( $request->has('image')){
            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();

            Storage::putFileAs('team', $image, $imageName);
            $team->image = 'storage/team/'. $imageName;
            $team->save();
        }

        session()->flash('success', 'Team Member Added Successfully!');
        return redirect()->route('team.index');
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
        return view('admin.team.edit')->with('teams',$team);
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
        ]);

        if( $request->has('image')){

             // old image delete
            $old_image = Team::find($id);

            if (file_exists($old_image->image)) {
                unlink(public_path($old_image->image));
            }

            $image = $request->image;
            $imageName = time() . '_' . uniqid() .'.'. $image->getClientOriginalExtension();
            Storage::putFileAs('/team', $image, $imageName);
            // Storage::putFileAs('/portfolio', $image, $imageName);
            $image_address = 'storage/team/'. $imageName;

            Team::findOrFail($id)->update([
                'name' => $request->name,
                'position' => $request->position,
                'image' => $image_address,
            ]);

            session()->flash('success', 'Team Content Updated Successfully With Image!');
            return redirect()->route('team.index');

        }else{

            Team::findOrFail($id)->update([
                'name' => $request->name,
                'position' =>  $request->position,
            ]);

            session()->flash('success', 'Team Content Updated Successfully Without Image!');
            return redirect()->route('team.index');

        }




        session()->flash('success', 'Member Update Successfully!');
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
        $team = Team::find($id);

        if(file_exists($team->image)){
            unlink(base_path('public/'.$team->image));
            $team->delete();
        }
        $team->delete();
        session()->flash('success', 'Member Deleted Successfully!');
        return back();
    }
}
